<!-- Sidebar -->
<div class="app-sidebar bg-light">
    <div class="sidebar-header bg-dark">
        <a class="header-brand" href="<?php echo base_url('/') ?>">
            <div class="logo-img">
                <img src="public/src/img/Utrial_logo_ofc_png.png" class="header-brand-img" alt="logo do site utrial">
            </div>
        </a>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">                

                <div class="nav-lavel bg-dark text-center text-white"><strong>Cursos</strong></div>

                <!-- FRONT-END -->
                <div class="nav-item dropdown-toggle" onclick="toggleDropdown('frontend')">
                    <div class="nav-lavel bg-dark text-center text-white"><strong>Front-End</strong></div>
                </div>
                <div id="frontend" class="dropdown-content">
                    <a href=""><i class="fa-brands fa-html5"></i> HTML</a>
                    <a href=""><i class="fa-brands fa-css3-alt"></i> CSS</a>
                    <a href=""><i class="fa-brands fa-js"></i> JavaScript</a>
                    <a href=""><i class="fa-brands fa-react"></i> React</a>
                    <a href=""><i class="fa-brands fa-figma"></i> Figma</a>
                </div>

                <!-- BACK-END -->
                <div class="nav-item dropdown-toggle" onclick="toggleDropdown('backend')">
                    <div class="nav-lavel bg-dark text-center text-white"><strong>Back-End</strong></div>
                </div>
                <div id="backend" class="dropdown-content">
                    <a href=""><i class="fa-brands fa-php"></i> PHP</a>
                    <a href=""><i class="fa-brands fa-java"></i> Java</a>
                    <a href=""><i class="fa-brands fa-python"></i> Python</a>
                    <a href=""><i class="fa-brands fa-node-js"></i> Node JS</a>
                    <a href=""><i class="fa-solid fa-c"></i> C# </a>
                </div>

                <!-- BANCO DE DADOS -->
                <div class="nav-item dropdown-toggle" onclick="toggleDropdown('Banco de dados')">
                    <div class="nav-lavel bg-dark text-center text-white"><strong>Banco de dados</strong></div>
                </div>
                <div id="Banco de dados" class="dropdown-content">
                    <a href=""><i class="fa-solid fa-database"></i> SQL</a>
                    <a href=""><i class="fa-brands fa-mdb f-15"></i> Mongo DB</a>
                    <a href=""><i class="fa-solid fa-fire"></i> Fire Base</a>
                </div>
                
                <!-- OUTROS -->
                <div class="nav-item dropdown-toggle" onclick="toggleDropdown('outros')">
                    <div class="nav-lavel bg-dark text-center text-white"><strong>Outros</strong></div>
                </div>
                <div id="outros" class="dropdown-content">
                    <a href=""><i class="fa-solid fa-brain"></i> IA</a>
                    <a href=""><i class="fa-solid fa-user-secret"></i> Cyber Security</a>
                    <a href=""><i class="fa-solid fa-file-excel"></i> Excel</a>
                    <a href=""><i class="fa-solid fa-file-word"></i> Word</a>
                </div>

                <!-- ADMIN -->
                <div class="nav-item dropdown-toggle" onclick="toggleDropdown('Administração')">
                <div class="nav-lavel bg-dark text-center text-white"><strong>Administração</strong></div>
                </div>
                <div id="Administração" class="dropdown-content">
                    <a href=""><i class="nav-item fa-solid fa-users"></i> Alunos</a>
                    <a href=""><i class="fa-solid fa-book-open"></i> Aulas</a>
                    <a href=""><i class="fa-solid fa-clock"></i> Horários</a>
                </div>
            </nav>
        </div>
    </div>
</div>



<style>

.header-brand-img {
    width: 100px;
    max-height: 100px;
}

.dropdown-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease-in-out;
    padding-left: 20px;
    display: flex;
    flex-direction: column;
}

.dropdown-content.show {
    max-height: 500px; 
}

.dropdown-content a {
    padding: 5px 0;
    color: #333;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
}

.dropdown-toggle {
    cursor: pointer;
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #000;
}

.dropdown-toggle:hover {
    background-color:rgb(214, 214, 214);
}

</style>

<script>
    function toggleDropdown(id) {
        const section = document.getElementById(id);
        section.classList.toggle('show');
    }
</script>

    
