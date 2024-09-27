<script>
    const menuBtn = document.querySelector('#menu-mobile')
    const menu = document.querySelector('.menu')
    const listMenu = document.querySelectorAll('.menu li')

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('close')
    })

    listMenu.forEach(item => {
        item.addEventListener('click', () => {
            menu.classList.toggle('close')
        })
    })
</script>

<footer>
    Óticas Zóio de Bomba - Todos os direitos reservados
</footer>


</body>


</html>