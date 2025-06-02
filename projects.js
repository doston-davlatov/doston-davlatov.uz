const projects = [
    {
        id: 1,
        title: "Ninja O‘yini",
        image: "img/ninja.jpg",
        alt: "ninja jpg",
        description: "Ninja o‘yinida foydalanuvchilarga raqobat muhiti taqdim etadi...",
        technologies: ["CSS", "JavaScript", "Bootstrap", "PHP", "MySql"],
        link: "http://projects.doston-davlatov.uz/ninja-game/"
    },
    {
        id: 2,
        title: "X vs O",
        image: "img/x-o.png",
        alt: "x vs o jpg",
        description: "X vs O - bu klassik Tic Tac Toe o‘yinining zamonaviy veb-versiyasi...",
        technologies: ["HTML", "JavaScript", "CSS"],
        link: "https://gamee-x-vs-o.netlify.app/"
    },
    {
        id: 3,
        title: "Anon1m",
        image: "img/anonim_2.jpg",
        alt: "anonim jpg",
        description: "Anonim – bu zamonaviy veb-texnologiyalar asosida yaratilgan onlayn musiqiy platforma...",
        technologies: ["HTML", "CSS", "JavaScript", "PHP", "MySql"],
        link: "./#anon1mText"
    }
];

function renderProjects() {
    const container = document.getElementById('project-container');
    container.innerHTML = '';

    projects.forEach(project => {
        const card = `
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="${project.image}" class="card-img-top" alt="${project.alt}" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title">${project.title}</h4>
                        <button class="btn btn-outline-primary mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#projectText${project.id}" aria-expanded="false" aria-controls="projectText${project.id}">
                            Batafsil ko‘rish
                        </button>
                        <div class="collapse" id="projectText${project.id}">
                            <p class="card-text mt-2">${project.description}</p>
                            <p class="tech-stack fw-semibold">Texnologiyalar: ${project.technologies.join(', ')}</p>
                            <a class="btn btn-outline-success mt-auto" href="${project.link}" target="_blank" rel="noopener noreferrer">
                                Saytga o‘tish
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', card);
    });
}