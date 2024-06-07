// Obtener las reglas de animación del documento
const slides = document.querySelectorAll('.slide2');
let slidesLength = slides.length;
let animationTransform = slidesLength / 3;
let slideTrackWidth = animationTransform * 2;
const slideTrack = document.querySelector('slide-track2');
const styleSheet = document.styleSheets[0];
let rules = document.styleSheets[0].cssRules || document.styleSheets[0].rules;


// Buscar el keyframe 'slider2'
let scroll2Keyframe;
for (let i = 0; i < rules.length; i++) {
    if (rules[i].type === CSSRule.KEYFRAMES_RULE && rules[i].name === 'scroll2') {
        scroll2Keyframe = rules[i];
        break;
    }
}

// Modificar la propiedad 'transform' del keyframe 'move'
const keyframes = scroll2Keyframe.cssRules || scroll2Keyframe.rules;
for (let j = 0; j < keyframes.length; j++) {
    if (keyframes[j].keyText === '100%') {
        keyframes[j].style.transform = `translateX(calc(-35rem * ${animationTransform})`;
    }
}