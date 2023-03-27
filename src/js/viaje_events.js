document.addEventListener('DOMContentLoaded', async function () {

    await loadImagesFromAPI();

})

const loadImagesFromAPI = async () => {
    const images = await (await fetch('https://lexica.art/api/v1/search?q=sky', {
        method: 'GET'
    }).then(res => res.json())).images


    cardElementsLenght = (document.getElementsByTagName('img').length)
    cardElements = (document.getElementsByTagName('img'))

    console.log(cardElements[0])
    for (var i = 0; i <= cardElementsLenght; i++) {
        cardElements[i].src = images[i].src
    }
}


const showToast = () => {
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
    }
}