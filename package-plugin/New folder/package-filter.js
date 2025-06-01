jQuery(document).ready(function ($) {
    $('.taxonomy-filters select').on('change', function () {
        var data = {
            'action': 'filter_packages',
            'package_categories': $('select[name="package_categories"]').val(),
            'inclusion_categories': $('select[name="inclusion_categories"]').val(),
            'destinations': $('select[name="destinations"]').val()
        };

        $.ajax({
            url: ajax_params.ajax_url,
            data: data,
            type: 'POST',
            success: function (response) {
                $('.packages-grid-container').html(response);
                setTimeout(()=>{
                    updateRangeAndFilter()
                    updatePriceAndFilter()
                }, 1000);
            }
        });
    });

    function updateRangeAndFilter() {
        let minRange = document.getElementById("range-min");
        let maxRange = document.getElementById("range-max");
        let minValSpan = document.getElementById("range-min-val");
        let maxValSpan = document.getElementById("range-max-val");
        let sliderTrack = document.querySelector(".slider-track");
        let defaultMin = parseInt(minRange.min);
        let defaultMax = parseInt(maxRange.max);

        function updateValues() {


            let minVal = parseInt(minRange.value);
            let maxVal = parseInt(maxRange.value);
            if (minVal > maxVal) [minRange.value, maxRange.value] = [maxVal, minVal];

            let minPercent = ((minVal - defaultMin) / (defaultMax - defaultMin)) * 100;
            let maxPercent = ((maxVal - defaultMin) / (defaultMax - defaultMin)) * 100;

            sliderTrack.style.left = minPercent + "%";
            sliderTrack.style.width = (maxPercent - minPercent) + "%";

            minValSpan.textContent = `${minVal}`;
            maxValSpan.textContent = `${maxVal}`;
 
            const markerWidth = 20;
            minValSpan.style.left = `calc(${minPercent}% - ${(((minPercent - 50) / 50) * markerWidth) / 2}px)`;
            maxValSpan.style.left = `calc(${maxPercent}% - ${(((maxPercent - 50) / 50) * markerWidth) / 2}px)`;

            filterAndSortPackages(minVal, maxVal);
        }

        function filterAndSortPackages(minNights, maxNights) {
            let packages = document.querySelectorAll(".package-grid-column");
            let packageContainer = document.querySelector(".package-grid");
            let filteredPackages = [];

            packages.forEach(pkg => {
                let durationElement = pkg.querySelector(".newPackageDuration");
                if (durationElement) {
                    let nightsMatch = durationElement.textContent.trim().match(/\b(\d{1,2})N\b/);
                    if (nightsMatch) {
                        let nights = parseInt(nightsMatch[1], 10);
                        if (nights >= minNights && nights <= maxNights) {
                            pkg.style.display = "block";
                            filteredPackages.push({ element: pkg, nights });
                        } else {
                            pkg.style.display = "none";
                        }
                    }
                }
            });

            filteredPackages.sort((a, b) => a.nights - b.nights);
            filteredPackages.forEach(pkg => packageContainer.appendChild(pkg.element));
        }

        function resetAndUpdateRange() {
            minRange.value = defaultMin;
            maxRange.value = defaultMax;
            updateValues();

            setTimeout(() => {
                let packages = document.querySelectorAll(".package-grid-column");
                let minDuration = Infinity, maxDuration = -Infinity;

                packages.forEach(pkg => {
                    let durationElement = pkg.querySelector(".newPackageDuration");
                    if (durationElement) {
                        let nightsMatch = durationElement.textContent.trim().match(/\b(\d{1,2})N\b/);
                        if (nightsMatch) {
                            let nights = parseInt(nightsMatch[1], 10);
                            minDuration = Math.min(minDuration, nights);
                            maxDuration = Math.max(maxDuration, nights);
                        }
                    }
                });

                if (minDuration !== Infinity && maxDuration !== -Infinity) {  minRange.min = minDuration;
                    minRange.max = maxDuration;
                    minRange.value = minDuration;
                    maxRange.min = minDuration;
                    maxRange.max = maxDuration;
                    maxRange.value = maxDuration;
                    defaultMin = minDuration;
                    defaultMax = maxDuration;
                    updateValues();
                }
            }, 100);
        }

        minRange.addEventListener("input", updateValues);
        maxRange.addEventListener("input", updateValues);
        updateValues();
        resetAndUpdateRange();
    }

    updateRangeAndFilter();


    function updatePriceAndFilter() {
        let minRange = document.getElementById("price-min");
        let maxRange = document.getElementById("price-max");
        let minValSpan = document.getElementById("price-min-val");
        let maxValSpan = document.getElementById("price-max-val");
        let sliderTrack = document.querySelector(".slider-track-price");
        let defaultMin = parseInt(minRange.min);
        let defaultMax = parseInt(maxRange.max);

        function updateValues() {

            let minVal = parseInt(minRange.value);
            let maxVal = parseInt(maxRange.value);
            if (minVal > maxVal) [minRange.value, maxRange.value] = [maxVal, minVal];

            let minPercent = ((minVal - defaultMin) / (defaultMax - defaultMin)) * 100;
            let maxPercent = ((maxVal - defaultMin) / (defaultMax - defaultMin)) * 100;

            sliderTrack.style.left = minPercent + "%";
            sliderTrack.style.width = (maxPercent - minPercent) + "%";

            minValSpan.textContent = `${minVal}`;
            maxValSpan.textContent = `${maxVal}`;
 
            const markerWidth = 20;
            minValSpan.style.left = `calc(${minPercent}% - ${(((minPercent - 50) / 50) * markerWidth) / 2}px)`;
            maxValSpan.style.left = `calc(${maxPercent}% - ${(((maxPercent - 50) / 50) * markerWidth) / 2}px)`;

            filterAndSortPackages(minVal, maxVal);
        }

        function filterAndSortPackages(minPrice, maxPrice) {
            let packages = document.querySelectorAll(".package-grid-column");
            let packageContainer = document.querySelector(".package-grid");
            let filteredPackages = [];

            packages.forEach(pkg => {
                let priceElement = pkg.querySelector(".pp");
                if (priceElement) {
                    let priceMatch = priceElement.textContent.trim().match(/₹(\d+)/)
                    if (priceMatch) {
                        let price = parseInt(priceMatch[1], 10);
                        if (price >= minPrice && price <= maxPrice) {
                            pkg.style.display = "block";
                            filteredPackages.push({ element: pkg, price });
                        } else {
                            pkg.style.display = "none";
                        }
                    }
                }
            });

            filteredPackages.sort((a, b) => a.price - b.price);
            filteredPackages.forEach(pkg => packageContainer.appendChild(pkg.element));
        }

        function resetAndUpdateRange() {
            minRange.value = defaultMin;
            maxRange.value = defaultMax;
            updateValues();

            setTimeout(() => {
                let packages = document.querySelectorAll(".package-grid-column");
                let minPrice = Infinity, maxPrice = -Infinity;

                packages.forEach(pkg => {
                    let priceElement = pkg.querySelector(".pp");
                    if (priceElement) {
                        let priceMatch = priceElement.textContent.trim().match(/₹(\d+)/)
                        if (priceMatch) {
                            let price = parseInt(priceMatch[1], 10);
                            minPrice = Math.min(minPrice, price);
                            maxPrice = Math.max(maxPrice, price);
                        }
                    }
                });

                if (minPrice !== Infinity && maxPrice !== -Infinity) {  minRange.min = minPrice;
                    minRange.max = maxPrice;
                    minRange.value = minPrice;
                    maxRange.min = minPrice;
                    maxRange.max = maxPrice;
                    maxRange.value = maxPrice;
                    defaultMin = minPrice;
                    defaultMax = maxPrice;
                    updateValues();
                }
            }, 100);
        }

        minRange.addEventListener("input", updateValues);
        maxRange.addEventListener("input", updateValues);
        updateValues();
        resetAndUpdateRange();
    }

    updatePriceAndFilter()
});
