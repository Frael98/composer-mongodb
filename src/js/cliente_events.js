document.addEventListener('DOMContentLoaded', function () {

});

const setModal = async (_id) => {

    data = {
        _id
    }
    res = await fetch('./index.php?c=Cliente&m=getCliente', { method: 'POST', body: JSON.stringify(data), headers: { "Content-Type": "application/json" } })
    res = await res.json();

    mNombre = document.getElementById('mNombre');
    mApellido = document.getElementById('mApellido');

    mNombre.value = res.name;
    mApellido.value = res.lastname
    console.log(_id)
    console.log(res)
}

const deleteCliente = async (_id) => {

    res = await fetch('./index.php?c=Cliente&m=deleteCliente',
        {
            method: 'POST',
            body: JSON.stringify({ _id }),
            headers: {
                "Content-Type": "application/json"
            }
        });
    res = await res.json();

    console.log(res)
}