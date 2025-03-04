<div id="editExpenseModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>Editar Despesa</h1>
        <form action="{{ route('edit_expense', $expense->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" value="{{ $expense->descricao }}" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" value="{{ $expense->categoria }}" required>
            </div>
            <div class="form-group">
                <label for="valor_total">Valor Total:</label>
                <input type="number" id="valor_total" name="valor_total" value="{{ $expense->valor_total }}" required>
            </div>
            <div class="form-group">
                <label for="parcelas">Parcelas:</label>
                <input type="number" id="parcelas" name="parcelas" value="{{ $expense->parcelas }}" required>
            </div>
            <div class="form-group">
                <label for="parcelas_pagas">Parcelas Pagas:</label>
                <input type="number" id="parcelas_pagas" name="parcelas_pagas" value="{{ $expense->parcelas_pagas }}" required>
            </div>
            <div class="form-group">
                <label for="data_inicio">Data de Início:</label>
                <input type="date" id="data_inicio" name="data_inicio" value="{{ $expense->data_inicio }}" required>
            </div>
            <div class="form-group">
                <label for="recorrente">Recorrente:</label>
                <input type="checkbox" id="recorrente" name="recorrente" {{ $expense->recorrente ? 'checked' : '' }}>
            </div>
            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea id="observacoes" name="observacoes">{{ $expense->observacoes }}</textarea>
            </div>
            <div class="form-group">
                <label for="metodo_pagamento">Método de Pagamento:</label>
                <input type="text" id="metodo_pagamento" name="metodo_pagamento" value="{{ $expense->metodo_pagamento }}" required>
            </div>
            <button type="submit" class="button-primary">Salvar</button>
        </form>
    </div>
</div>
