
    <!--INICIO DA NAV -->
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <!--Logo / Brand-->
        <div class="navbar-brand">
            <a class="navbar-item" id="logoid" href="/telecall/home">
                <img src="/telecall/assets/img/telecall-logo-removebg-preview.png" alt="site logo" class="">
            </a>
            <a role="button" class="navbar-burger " aria-label="menu" aria-expanded="true">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarMain" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/telecall/home">
                    Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/telecall/internet">
                        Internet
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="/telecall/internet/internetDedicada">
                            Internet Dedicada
                        </a>
                        <a class="navbar-item disabled">
                            Banda larga
                        </a>
                        <a class="navbar-item disabled">
                            Wi-Fi
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/telecall/telefonia">
                        Telefonia
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="/telecall/telefonia/pabx">
                            PABX IP Virtual
                        </a>
                        <a class="navbar-item disabled">
                            Números 0800 e 40XX
                        </a>

                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/telecall/infra">
                        Rede e infraestrutura
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="/telecall/infra/pontoAPonto">
                            Ponto a Ponto
                        </a>
                        <a class="navbar-item disabled">
                            MPLS
                        </a>
                        <a class="navbar-item disabled">
                            Fibra Apagada e Dutos
                        </a>
                        <a class="navbar-item disabled">
                            Co-location
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/telecall/mobilidade">
                        Mobilidade
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="/telecall/mobilidade/celularEmp">
                            Celular Empresarial
                        </a>
                        <a class="navbar-item disabled">
                            MPLS
                        </a>
                        <a class="navbar-item disabled">
                            MVNA/E
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/telecall/cpaas">
                        CPaaS
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="/telecall/cpaas/doisFA">
                            2FA
                        </a>
                        <a class="navbar-item is-active" href="/telecall/cpaas/mascara">
                            Número Máscara
                        </a>
                        <a class="navbar-item is-active" href="/telecall/cpaas/calls">
                            Google Verified Calls
                        </a>
                        <a class="navbar-item is-active" href="/telecall/cpaas/sms">
                            SMS Programável
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <button id="dark-mode-toggle" aria-label="Alternar modo claro/escuro">
                        <i class="fa-solid fa-moon"></i>
                    </button>&nbsp &nbsp &nbsp &nbsp
                    <a id="zoom-in">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a> &nbsp &nbsp &nbsp
                    <a id="zoom-out">
                        <i class="fa-solid fa-circle-minus"></i>
                    </a>
                </div>
                <div class="navbar-item has-dropdown" id="responsiveButton">
                    <div class="buttons navbar-item">
                        <a class="button is-light" id="buttonlogin" href="/telecall/usuario/login" >
                            <i class="fa-solid fa-circle-user" id="loginIcon"></i>
                            Área do cliente
                        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--FINAL DA MINHA NAV-->