document.addEventListener('DOMContentLoaded', () => {

})

const setData = () => {

    fetch('./index.php?c=Cliente&m=getProduct', {
        method: 'post',
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
        }
    })
        .then(res => res.json())
        .then(
            (res) => {
               
            }
        )
        .catch(err => console.log(err))

    
}