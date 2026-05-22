<img src="./img/front-calcifer.png">
<div class="content">
    <div class="top">
        <span class="title">Calcifer</span><br>
        <span class="subtitle">Fintech P2P Lending Ecosystem & Full-Stack Architecture</span>
    </div>
    <div class="bottom">
        <span class="text">
        Calcifer is a comprehensive P2P lending platform developed as the final capstone project for my Bachelor’s Degree in Computer Science (L-31). 
        It operates as a digital intermediary-free ecosystem, connecting "Howl" (users seeking loans) directly with "Calcifer" (investors with liquidity). 
        The project was built to address a specific gap in the consumer lending market, replicating real-world regulatory logic while maintaining a highly accessible, mobile-first interface.
        <br><br>
        <strong>The "Vanilla" Engineering Philosophy</strong><br>
        A core objective of this project was to build a robust, secure financial application entirely from scratch, without the abstraction of modern frameworks like React, Vue, or PHP ORMs. This ensured total control over performance, database queries, and the application architecture.
        <br><br>
        <strong>Key Technical Highlights:</strong><br>
        - <strong>Algorithmic Gamification:</strong> The platform features a dynamic Credit Score system (ranging from 0 to 500, with gamified tiers like "Scintilla" to "Calcifer"). This score isn't just visual; it actively drives the platform's financial logic by calculating the proposed interest rate using the formula $\max(3.0, 15.0 - (\frac{credit\_score}{20.0}))$.<br>
        - <strong>Data Integrity & ACID Transactions:</strong> The database relies on an optimized MariaDB InnoDB schema (8 relational tables). Critical financial operations, such as loan funding and wallet balance updates, are executed using strict ACID transactions (explicit BEGIN/COMMIT/ROLLBACK) to guarantee zero data corruption during multi-table operations.<br>
        - <strong>Advanced Security & Cryptography:</strong> Authentication is stateless, utilizing HS256-signed JWTs stored securely via HttpOnly cookies. Furthermore, user negotiations happen in a private chat where all messages are encrypted end-to-end using AES-256-CBC, meaning sensitive data remains entirely unreadable at the database level.<br>
        - <strong>Frontend Architecture (PWA):</strong> Built with ES modules and a custom CSS-variable Design System, the interface acts as a Progressive Web App (PWA). A Service Worker handles the caching of static assets, ensuring that core features like the user's wallet remain accessible even offline.<br>
        - <strong>Infrastructure & DevOps:</strong> The system is deployed on a production-ready Rocky 9 Linux VPS utilizing Apache and PHP-FPM, hardened with specific SELinux security policies. The RESTful API layer is fully documented using an OpenAPI 3.0 specification via Swagger UI, ensuring a strict contract between the frontend and backend.
        <br><br>
        Calcifer is not just a prototype; it is a fully functioning case study that demonstrates deep proficiency in full-stack development, cryptography, database engineering, and server administration.
        </span>
    </div>
</div>

<img src="./img/front-calcifer5.png">
<img src="./img/front-calcifer3.png">
<img src="./img/front-calcifer4.png">

<div class="content">
    <div class="sub-bottom">
        <div class="info-text">
            <span class="text text-title"><span class="bold">Timeline</span></span>
            <span class="text text-subtitle">Jan - Apr 2026</span>
        </div>
        <div class="info-text">
            <span class="text text-title"><span class="bold">Role</span></span>
            <span class="text text-subtitle">Developer & Designer</span>
        </div>
        <div class="info-text">
            <span class="text text-title"><span class="bold">Tech Stack</span></span>
            <span class="text text-subtitle">PHP 8.1, MariaDB, Vanilla JS/CSS, JWT, AES-256, OpenAPI 3.0, PWA</span>
        </div>
        <div class="info-text">
            <span class="text text-title"><span class="bold">Environment</span></span>
            <span class="text text-subtitle">Rocky Linux 9, Apache, Git</span>
        </div>
    </div>
</div>