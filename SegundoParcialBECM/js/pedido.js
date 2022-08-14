const carro     = new Carrito();
const carrito   = document.getElementById('carrito');
const productos = document.getElementById('lista-productos');
const listaProductos    = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn  = document.getElementById('vaciar-carrito');
const procesarPedidoBtn = document.getElementById('procesar-pedido');

$('#lista-carrito').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
    "paging": false,
    "bFilter": false,
    "bInfo": false
});

cargarEventos();

function cargarEventos() {

    
    /**
     * @param  {[type]} 'click' [SE EJECUTA CUANDO SE PRESIONAR AGREGAR CARRITO]
     * @param  {[type]} (e      [EVENTO DEL DOM]
     * @return {[type]}         [description]
     */
    productos.addEventListener('click', (e) => {
        carro.comprarProducto(e)
    });

    
    /**
     * CUANDO SE ELIMINA PRODUCTOS DEL CARRITO
     * [description]
     * @param  {[type]} 'click' [CLICK DE ELIMINAR ITEM]
     * @param  {[type]} (e      [description]
     * @return {[type]}         [description]
     */
    carrito.addEventListener('click', (e) => {
        carro.eliminarProducto(e)
    });

    
    /**
     * AL VACIAR CARRITO
     * @param  {[type]} 'click' [CLICK EN VACIAR CARRITO]
     * @param  {[type]} (e      [EVENTO CLIC]
     * @return {[type]}         [description]
     */
    vaciarCarritoBtn.addEventListener('click', (e) => {
        carro.vaciarCarrito(e)
    });

    /**
     * AL CARGAR DOCUMENTO SE 
     * MUESTRA LO ALMACENADO EN LS
     */
    document.addEventListener('DOMContentLoaded', carro.leerLocalStorage());

    /**
     * [ENVIAR PEDIDO A OTRA PAGINA]
     * @param  {[type]} 'click' [EVENTO CLIC]
     * @param  {[type]} (e      [description]
     * @return {[type]}         [description]
     */
    procesarPedidoBtn.addEventListener('click', (e) => {
        carro.procesarPedido(e)
    });
    
    /**
     * [description]
     * @param  {[type]} e){carro.obtenerEvento(e)} [ACTUALIZA LAS CANTIDADES DEL LOCALSTORAGE]
     * @return {[type]}      [description]
     */
    $(".cantidadCr").change(function(e){
      carro.obtenerEvento(e);
    });
}