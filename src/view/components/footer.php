<script src="./vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
<script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="./src/js/cliente_events.js"></script>
<script src="./src/js/viaje_events.js"></script>
<script src="./src/js/producto_events.js"></script>

<?php if ($_REQUEST['c'] == "Viaje") : ?>
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const images = await (await fetch('https://lexica.art/api/v1/search?q=sky', {
                method: 'GET'
            }).then(res => res.json())).images


            cardElementsLenght = (document.getElementsByTagName('img').length)
            cardElements = (document.getElementsByTagName('img'))

            console.log(cardElements[0])
            for (var i = 0; i <= cardElementsLenght; i++) {
                cardElements[i].src = images[i].src
            }
        })
    </script>
<?php endif ?>
</body>

</html>