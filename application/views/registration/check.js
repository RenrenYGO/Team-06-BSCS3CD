document.getElementById('tc').addEventListener('click', function(e) {
    document.getElementById('sub1').disabled = !e.target.checked;
});

const tl4 = gsap.timeline({defaults: {ease:"power1.out"}});
