window.addEventListener('load', function() {
    // Set a timeout for 5 seconds to hide the loader
    setTimeout(function() {
      document.getElementById('loader').style.display = 'none';
      document.getElementById('content').style.display = 'block';
    }, 5000); // 5000 milliseconds = 5 seconds
  });
  