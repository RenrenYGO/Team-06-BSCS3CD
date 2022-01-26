const tl4 = gsap.timeline({defaults: {ease:"power1.out"}});


tl4.to('.text',{y:'0%', duration: 1, stagger: 0.25});
tl4.to('.slider', {y:'-100%', duration: 1.5, delay: 0.5 });