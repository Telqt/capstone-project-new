const totalHeight = document.body.scrollHeight - window.innerHeight;
console.log("Estimated total height:", totalHeight, "px");

const progressbar = document.getElementById('progressbar'); 

window.addEventListener('scroll', function() {

  const currentHeight = window.scrollY; 

  
  let newHeight = (currentHeight / totalHeight) * 100;
  

  progressbar.style.height = newHeight + "%";
});
