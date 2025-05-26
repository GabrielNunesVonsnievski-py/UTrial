<!-- Sidebar -->
<div class="app-sidebar bg-dark">
    <div class="sidebar-header bg-dark">
        <a class="header-brand" href="<?php echo base_url('/home') ?>">
            <div class="logo-img">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('public/img/Utrial_logo.png'); ?>" alt="logo do site utrial" style="height 200px; width: 200px;">
                </a>
            </div>
        </a>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">

                <!-- MEU PAINEL -->
                <div class="nav-label text-white p-2"><strong>&nbsp;&nbsp;MEU PAINEL</strong></div>
                <div class="painel-links p-2 text-center">
                    <a href="#" class="painel-item"><i class="fa-solid fa-bookmark"></i> Meus Cursos</a>
                    <a href="#" class="painel-item"><i class="fa-solid fa-hand-holding-dollar"></i> Minhas Mensalidades</a>
                    <a href="#" class="painel-item"><i class="fa-solid fa-certificate"></i> Meus Certificados</a>
                    <a href="<?php echo base_url("/Usuario/editInfoUsuario/{$this->session->userdata('usuario_id')}"); ?>" class="painel-item"><i class="fa-regular fa-circle-user"></i> Minha Conta</a>
                </div>

                <div class="nav-lavel" style="background-color: #495057;"><strong><a class='text-white' href="<?php echo base_url('/cursos') ?>">CURSOS</a></strong></div>

                <!-- FRONT-END -->
                <div class="nav-item dropdown-toggle" onclick="toggleDropdown('frontend')">
                    <div class="painel-item nav-lavel bg-dark text-white"><i class="fa-solid fa-caret-down"></i>Front-End</div>
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
                    <div class="painel-item nav-lavel bg-dark text-center text-white"><i class="fa-solid fa-caret-down"></i> Back-End</div>
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
                    <div class="painel-item nav-lavel bg-dark text-center text-white"><i class="fa-solid fa-caret-down"></i> Banco de dados</div>
                </div>
                <div id="Banco de dados" class="dropdown-content">
                    <a href=""><i class="fa-solid fa-database"></i> SQL</a>
                    <a href=""><i class="fa-brands fa-mdb f-15"></i> Mongo DB</a>
                    <a href=""><i class="fa-solid fa-fire"></i> Fire Base</a>
                </div>

                <!-- OUTROS -->
                <div class="nav-item dropdown-toggle text-white" onclick="toggleDropdown('outros')">
                    <div class="painel-item nav-lavel bg-dark text-center text-white"><i class="fa-solid fa-caret-down"></i> Outros</div>
                </div>
                <div id="outros" class="dropdown-content ">
                    <a href=""  ><i class="fa-solid fa-brain"></i> IA</a>
                    <a href=""  ><i class="fa-solid fa-user-secret"></i> Cyber Segurança</a>
                    <a href=""  ><i class="fa-solid fa-file-excel"></i> Excel</a>
                    <a href=""  ><i class="fa-solid fa-file-word"></i> Word</a>
                </div>

                <!-- ADMIN -->
                <div class="nav-label text-white p-2"><strong>&nbsp;&nbsp;ADMINISTRAÇÃO</strong></div>
                <div class="painel-links p-2 text-center">
                    <a href="<?php echo base_url('/alunos');?>" class="painel-item"><i class="nav-item fa-solid fa-users"></i> Alunos</a>
                    <a href="<?php echo base_url('/aulas') ?>" class="painel-item"><i class="fa-solid fa-book-open"></i> Aulas</a>
                    <a href="#" class="painel-item"><i class="fa-solid fa-clock"></i> Horários</a>
                    <a href="#" class="painel-item"><i class="fa-solid fa-newspaper"></i> Avaliações</a>
                    <a href="<?php echo base_url('/precificacoes'); ?>" class="painel-item"><i class="fa-solid fa-comment-dollar"></i> Precificações</a>
                </div>

            </nav>
        </div>
    </div>
</div>



<style>

.item:hover{
    background-color:rgb(255, 255, 255);
}

.nav-label{
    background-color: #495057;
}

.sidebar-content::-webkit-scrollbar {
    display: none;
}

.painel-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.painel-item {
    display: flex;
    align-items: center;
    gap: 8px;
    background-color: #343a40;
    color: white;
    padding: 10px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.painel-item:hover {
    background-color: #495057;
    color: white;
    text-decoration: none;
}

.header-brand-img {
    width: 200px;
    height: 200px;
}

.dropdown-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease-in-out;
    display: flex;
    flex-direction: column;
}

.dropdown-content.show {
    max-height: 500px;
}

.dropdown-content a {
    padding: 10px 20px; /* padding interno horizontal */
    color: #FFFFFF;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.dropdown-content a:hover {
    background-color: #495057;
}

.dropdown-content :hover{
    background-color: #495057;
}

.dropdown-toggle {
    cursor: pointer;
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #FFFFFF;
}

.dropdown-toggle:hover {
    background-color: #495057;
}

</style>

<script>
    function toggleDropdown(id) {
        const section = document.getElementById(id);
        section.classList.toggle('show');
    }
</script>


