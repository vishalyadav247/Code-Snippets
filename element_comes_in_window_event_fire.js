function isElementInView(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  function onScroll() {
    const element = document.getElementById('elementToWatch');
    if (isElementInView(element)) {
      console.log('Element is in view!');
      // Execute any code when the element comes into view
      // For example, add a class, start an animation, etc.
  
      // Optional: Remove the event listener if you only need to check once
      window.removeEventListener('scroll', onScroll);
    }
  }
  
  // Attach the scroll event listener to the window
  window.addEventListener('scroll', onScroll);
  