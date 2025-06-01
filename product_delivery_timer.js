// delivery timer
document.addEventListener('DOMContentLoaded', () => {

    const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    function getOrdinalSuffix(day) {
        if (day > 3 && day < 21) return "th"; // Covers 4th - 20th
        switch (day % 10) {
            case 1: return "st";
            case 2: return "nd";
            case 3: return "rd";
            default: return "th";
        }
    }

    function isHoliday(date) {
        // const holidays = ["2025-03-28"];
      const holidays = ["2025-03-28","2025-03-31"];
        const dateString = date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2);
        return holidays.includes(dateString);
    }

    function getFixedUKTime() {
        const now = new Date();
        const formatter = new Intl.DateTimeFormat('en-GB', {
            timeZone: 'Europe/London',
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        });

        // Format the current date as a string in UK timezone
        const ukDateString = formatter.format(now);

        // Convert the string back to a Date object
        const dateParts = ukDateString.match(/(\d{2})\/(\d{2})\/(\d{4}), (\d{2}):(\d{2}):(\d{2})/);
        return new Date(`${dateParts[3]}-${dateParts[2]}-${dateParts[1]}T${dateParts[4]}:${dateParts[5]}:${dateParts[6]}`);
    }

    function getMonthName(date) {
        return new Intl.DateTimeFormat('en-GB', { month: 'short' }).format(date);
    }

    function updateCountdown() {
        // var now = getFixedUKTime();
        var now = new Date('2025-03-27T11:59:00');
        var targetTime = new Date(now.toISOString().split('T')[0]); // Resets to today's date at midnight.
        var deliveryDay; // This will store the date for delivery.
      
        // Handle specific scenarios for extended hours on weekends
        if (now.getDay() === 4 && now.getHours() >= 12) { // thrusday after 12 PM
            // Extend to Monday 12 PM
            targetTime.setDate(now.getDate() + 1);
            targetTime.setHours(10, 30, 0, 0);
            deliveryDay = new Date(targetTime.getTime());
            deliveryDay.setDate(deliveryDay.getDate() + 3); 
          
        } else if (now.getDay() === 5) { // Friday after 12 PM
            // Extend to Monday 12 PM
          if(now.getHours() < 10 || (now.getHours() == 10 && now.getMinutes() < 30 )){
            targetTime.setDate(now.getDate());
            targetTime.setHours(10, 30, 0, 0);
            deliveryDay = new Date(targetTime.getTime());
            deliveryDay.setDate(deliveryDay.getDate() + 3);
          }else{
            targetTime.setDate(now.getDate() + 3);
            targetTime.setHours(12, 0, 0, 0);
            deliveryDay = new Date(targetTime.getTime());
            deliveryDay.setDate(deliveryDay.getDate() + 1);
          }
          
        } else if (now.getDay() === 6) { // Saturday
            targetTime.setDate(now.getDate() + 2);
            targetTime.setHours(12, 0, 0, 0);
            deliveryDay = new Date(targetTime.getTime());
            deliveryDay.setDate(deliveryDay.getDate() + 1);
          
        } else if (now.getDay() === 0) { // Saturday
            targetTime.setDate(now.getDate()+ 1);
            targetTime.setHours(12, 0, 0, 0);
            deliveryDay = new Date(targetTime.getTime());
            deliveryDay.setDate(deliveryDay.getDate() + 1);
          
        } else {
            if (now.getHours() < 12) {
                // If it's before 12 PM, countdown to today's 12 PM, delivery tomorrow.
                targetTime.setHours(12, 0, 0, 0); // Set target time to today's noon.
                deliveryDay = new Date(targetTime.getTime());
                deliveryDay.setDate(deliveryDay.getDate() + 1); // Delivery tomorrow.
            } else {
                // If it's after 12 PM, countdown to tomorrow's 12 PM, delivery the day after tomorrow.
                targetTime.setDate(targetTime.getDate() + 1); // Move to tomorrow.
                targetTime.setHours(12, 0, 0, 0); // Set target time to noon.
                deliveryDay = new Date(targetTime.getTime());
                deliveryDay.setDate(deliveryDay.getDate() + 1); // Delivery the day after tomorrow.
            }
        }

      console.log('current Time -',now)
      console.log('target Time -',targetTime)
      console.log('delivery Day -',deliveryDay)
      
        // Avoid Sundays and holidays for the delivery day
      
        while (isHoliday(deliveryDay)) {
            if(deliveryDay.getDay() == 5){
              if(isHoliday(deliveryDay)){
                  targetTime.setDate(targetTime.getDate() + 1);
                  targetTime.setHours(10, 30, 0, 0);
              }
              deliveryDay.setDate(deliveryDay.getDate() + 3); 
            }else if(deliveryDay.getDay() == 1){
              if(isHoliday(deliveryDay)){
                  targetTime.setDate(targetTime.getDate() + 3);
                  targetTime.setHours(12, 0, 0, 0);
              }
              deliveryDay.setDate(deliveryDay.getDate() + 1); 
            }else{
              if(isHoliday(deliveryDay)){
                  targetTime.setDate(targetTime.getDate() + 1); 
              }
              deliveryDay.setDate(deliveryDay.getDate() + 1); 
            }
        }

        // Formatting the dispatch date for display
        var dispatchText = document.querySelectorAll('.dispatch-text');
        var dayName = daysOfWeek[deliveryDay.getDay()];
        var dateWithSuffix = deliveryDay.getDate() + getOrdinalSuffix(deliveryDay.getDate());
        var monthName = getMonthName(deliveryDay);
        dispatchText.forEach((element) => {
            element.innerHTML = `for delivery ${dayName} ${dateWithSuffix} ${monthName}`;
        })

        // Calculate the time difference and update the countdown
        var timeDifference = targetTime - now;
// console.log('now',now)
// console.log('targetTime',targetTime)
// console.log('timeDifference',timeDifference)
        if (timeDifference > 0) {
            var hours = Math.floor(timeDifference / 3600000);
            var minutes = Math.floor((timeDifference % 3600000) / 60000);
            var seconds = Math.floor((timeDifference % 60000) / 1000);
            let countdownTimer = document.querySelectorAll('.countdown-timer');
            countdownTimer.forEach((element) => {
                element.innerHTML = `${hours}h ${minutes}m ${seconds}s`;
            })
        }else{
           var hours = Math.floor(timeDifference / 3600000);
            var minutes = Math.floor((timeDifference % 3600000) / 60000);
            var seconds = Math.floor((timeDifference % 60000) / 1000);
            let countdownTimer = document.querySelectorAll('.countdown-timer');
            countdownTimer.forEach((element) => {
                element.innerHTML = `${hours}h ${minutes}m ${seconds}s`;
            })
        }
    }

    // setInterval(updateCountdown, 1000);
    updateCountdown(); // Initial call to start the countdown

})