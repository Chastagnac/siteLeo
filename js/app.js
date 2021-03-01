var rellax = new Rellax(".imgMove2");
var rellax = new Rellax(".imgMove1");

const sr = ScrollReveal();



sr.reveal(".texte p", {
    duration: 1500,
    origin: "left",
    distance: "100px",
});

sr.reveal(".title", {
    duration: 1500
});


sr.reveal(".imgMove1", {
    delay: 100,
    duration: 5000
});

sr.reveal(".imgMove2", {
    delay: 100,
    duration: 5000
});

sr.reveal(".details", {
    origin: "left",
    distance: "100px",
    duration: 1550,
    dalay: 1000
}, 1000);

sr.reveal(".lieu", {
    duration: 1550,
    dalay: 1000
}, 1000);


sr.reveal(".profession", {
    origin: "left",
    distance: "100px",
    duration: 1550,
    dalay: 1000
}, 1000);


sr.reveal(".date", {
    origin: "left",
    distance: "100px",
    duration: 1550,
    dalay: 1000
}, 1000);

sr.reveal(".ex-Pro", {
    origin: "top",
    duration: 1500
});
sr.reveal(".ex-sco", {
    origin: "top",
    duration: 1500
});
sr.reveal(".button", {
    duration: 2000,
    origin: "top",
    distance: "100px"
});