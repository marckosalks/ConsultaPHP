{{-- resources/views/components/sidebar-filtros.blade.php --}}
<div class="container-sidebar">
    <h3>Faça sua consulta:</h3>
    <form>

        <div class="containerPesquisa">
            <div>
                <span>Número do Pedido: </span>
                <input type="text" id="pedido" ">

            </div>
            <div class="">
                <button type="submit" class="btn-input">
                    <i class="bi bi-search teste"></i>
                </button>
            </div>
        </div>

        <span>Data inicial: </span>
        <input type="date" id="dataInicial">

        <span>Data Final: </span>
        <input type="date" id="dataFinal">


        <span>Status do pedido: </span>
        <select name="statusPedido" id="statusPedido">
            <option value="importado">Importado</option>
            <option value="pendente">Pendente</option>
            <option value="entregue">Entregue</option>
            <option value="finalizado">Finalizado</option>
        </select>

        <button type="submit">
            Pesquisar
        </button>
    </form>
</div>
