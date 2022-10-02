var h = document.documentElement,
    b = document.body,
    st = 'scrollTop',
    sh = 'scrollHeight',
    progress = document.querySelector('.progress_reading'),
    scroll;

document.addEventListener('scroll', function () {
    scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 70;
    console.log(scroll);
    progress.style.setProperty('--scroll', scroll + '%');
});