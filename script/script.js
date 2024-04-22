let sidebar = document.querySelector('div.collapsed-side-bar')
let main = document.querySelector('main.main-content')


// Função para abrir o menu
function openNav()
{
    sidebar.style.width = "350px";
    main.style.marginLeft = "350px";
}

// Função para fechar o menu
function closeNav()
{
    sidebar.style.width = "0"
    main.style.marginLeft = '0'
}