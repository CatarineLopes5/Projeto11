<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finanças Pessoais</title>
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    
    <!-- Menu -->
        <nav>

            <!--Perfil-->
            <div class="sidebar">
                <div class="PerfilMenu">
                <img src="css/perfil_.jpeg" class="imgPerfil" style="width: 45px !important; height: 45px !important; border-radius: 15%; object-fit: cover;>
                <span class="perfilName">Fulano de Tal</span>
            </div>


            <div class="sidebar-content">
                <ul class="lists">

                    <!--Opções-->
                    <!-- Opção HOme -->
                    <li class="list">
                        <a href="#" class="nav-link">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                            fill="#464646ff" viewBox="0 0 24 24" class="icon" >
                            <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                            <path d="M3 13h1v7c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-7h1c.4 0 .77-.24.92-.62.15-.37.07-.8-.22-1.09l-8.99-9a.996.996 0 0 0-1.41 0l-9.01 9c-.29.29-.37.72-.22 1.09s.52.62.92.62Zm9-8.59 6 6V20H6v-9.59z" class="icon"></path>
                            </svg>
                            <span class="link">Home</span>
                        </a>
                    </li>

                    <!-- Opção Entradas e Saídas-->
                    <li class="list">
                        <a href="#" class="nav-link">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                            fill="#464646ff" viewBox="0 0 24 24" >
                            <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                            <path d="M20 4h-8.59L10 2.59C9.62 2.21 9.12 2 8.59 2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 14H4V6h16z"></path><path d="M11 8v4H8l4 4 4-4h-3V8z" class="icon"></path>
                            </svg>
                            <span class="link">Entradas e Saídas</span>
                        </a>
                    </li>

                    <!--Opção Metas-->
                    <li class="list">
                        <a href="#" class="nav-link">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                            fill="#464646ff" viewBox="0 0 24 24" >
                            <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                            <path d="M19 4h-2V2h-2v2H9V2H7v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2M5 20V8h14V6v14z"></path><path d="m11 14.59-2.29-2.3-1.42 1.42 3.71 3.7 5.71-5.7-1.42-1.42z" class="icon"></path>
                            </svg>
                            <span class="link">Metas</span>
                        </a>
                    </li>

                    <!--Opção Dívidas-->
                    <li class="list">
                        <a href="#" class="nav-link">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                            fill="#464646ff" viewBox="0 0 24 24" >
                            <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                            <path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path><path d="M16.71 2.29A1 1 0 0 0 16 2H8c-.27 0-.52.11-.71.29l-5 5A1 1 0 0 0 2 8v8c0 .27.11.52.29.71l5 5c.19.19.44.29.71.29h8c.27 0 .52-.11.71-.29l5-5A1 1 0 0 0 22 16V8c0-.27-.11-.52-.29-.71zM20 15.58l-4.41 4.41H8.42l-4.41-4.41V8.41L8.42 4h7.17L20 8.41z" class="icon"></path>
                            </svg>
                            <span class="link">Dívidas</span>
                        </a>
                    </li>

                    <div class="Others">
                        <li class="list">
                            <a href="#" class="nav-link">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                fill="#464646ff" viewBox="0 0 24 24" >
                                <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                <path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4m0 6c-1.08 0-2-.92-2-2s.92-2 2-2 2 .92 2 2-.92 2-2 2"></path><path d="m20.42 13.4-.51-.29c.05-.37.08-.74.08-1.11s-.03-.74-.08-1.11l.51-.29c.96-.55 1.28-1.78.73-2.73l-1-1.73a2.006 2.006 0 0 0-2.73-.73l-.53.31c-.58-.46-1.22-.83-1.9-1.11v-.6c0-1.1-.9-2-2-2h-2c-1.1 0-2 .9-2 2v.6c-.67.28-1.31.66-1.9 1.11l-.53-.31c-.96-.55-2.18-.22-2.73.73l-1 1.73c-.55.96-.22 2.18.73 2.73l.51.29c-.05.37-.08.74-.08 1.11s.03.74.08 1.11l-.51.29c-.96.55-1.28 1.78-.73 2.73l1 1.73c.55.95 1.77 1.28 2.73.73l.53-.31c.58.46 1.22.83 1.9 1.11v.6c0 1.1.9 2 2 2h2c1.1 0 2-.9 2-2v-.6a8.7 8.7 0 0 0 1.9-1.11l.53.31c.95.55 2.18.22 2.73-.73l1-1.73c.55-.96.22-2.18-.73-2.73m-2.59-2.78c.11.45.17.92.17 1.38s-.06.92-.17 1.38a1 1 0 0 0 .47 1.11l1.12.65-1 1.73-1.14-.66c-.38-.22-.87-.16-1.19.14-.68.65-1.51 1.13-2.38 1.4-.42.13-.71.52-.71.96v1.3h-2v-1.3c0-.44-.29-.83-.71-.96-.88-.27-1.7-.75-2.38-1.4a1.01 1.01 0 0 0-1.19-.15l-1.14.66-1-1.73 1.12-.65c.39-.22.58-.68.47-1.11-.11-.45-.17-.92-.17-1.38s.06-.93.17-1.38A1 1 0 0 0 5.7 9.5l-1.12-.65 1-1.73 1.14.66c.38.22.87.16 1.19-.14.68-.65 1.51-1.13 2.38-1.4.42-.13.71-.52.71-.96v-1.3h2v1.3c0 .44.29.83.71.96.88.27 1.7.75 2.38 1.4.32.31.81.36 1.19.14l1.14-.66 1 1.73-1.12.65c-.39.22-.58.68-.47 1.11Z" class="icon"></path>
                                </svg>
                                <span class="link">Configurações</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                fill="#464646ff" viewBox="0 0 24 24" >
                                <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                <path d="m20.2 4.02-10-2a.99.99 0 0 0-.83.21C9.14 2.42 9 2.7 9 3v1H4c-.55 0-1 .45-1 1v14c0 .55.45 1 1 1h5v1c0 .3.13.58.37.77.18.15.4.23.63.23.07 0 .13 0 .2-.02l10-2c.47-.09.8-.5.8-.98V5c0-.48-.34-.89-.8-.98M5 18V6h4v12zm14 .18-8 1.6V4.22l8 1.6z"></path><path d="M13 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2"class="icon"></path>
                                </svg>
                                <span class="link">Sair</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>

    </nav>

        <header>
            <h1>Meu Controle Financeiro</h1>
        </header>

        <main class="container">
            <section class="resumo">
                <div class="card entrada">
                    <h2>Entradas</h2>
                    <p id="total-entrad+as">R$ 0,00</p>
                </div>
                <div class="card saida">
                    <h2>Saidas</h2>
                    <p id="total-saidas">R$ 0,00</p>
                </div>
                </div class="card total">
                    <h2>Saldo Total</h2>
                <p id="Saldo Total">R$ 0,00</p>
                </div>
            </section>

            <section class="formulario">
                <h3>Nova Transacao</h3>
                <form id="form-transacao">
                    <input type="text" id="descricao"placeholder="Descrição" required>
                    <input type="number" id="valor" placeholder="Valor (R$)" step="0.01" required>
                    <select id="tipo">
                        <option value="entrada">Entrada</option>
                        <option value="saida">Saída</option>
                    </select>
                    <button type="submit">Adicionar</button>
                </form>
            </section>

        </section>
        <h3>Historico de Lançamentos</h3>
        <table>
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody id="tabela-corpo">
                <tbody>
                </table>
        </section>
        </main> 
</div>
    </div>
</body>
</html>
        

    

