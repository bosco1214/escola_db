<div class="container">
    <h2 class="mt-2">Cadastrar turma</h2>
    <hr>
    <form action="<?= URL ?>/turmas/gravarTurma/" method="post">
        <div class="row">
            <div class="col-md-8">
                <label for="turma">Nome da turma</label>
                <input type="text" name="turma" id="turma" class="form-control" placeholder="nome da turma" required>
            </div>
            <div class="col-md-4">
                <label for="turma">Turno</label>
                <select name="turno" id="turno" class="form-control" required>
                    <option value="" selected>selecione</option>
                    <option value="MANHA">MANHÃ</option>
                    <option value="TARDE">TARDE</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="nivel">Nível de ensino</label>
                <select name="nivel" id="nivel" class="form-control">
                    <option value="" selected>selecione</option>
                    <option value="EDUCACAO INFANTIL">Educação Infantil</option>
                    <option value="ENSINO FUNDAMENTAL">Ensino Fundamental</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="etapa">Etapa</label>
                <select name="etapa" id="etapa" class="form-control">
                    <option value="" selected>selecione</option>
                    <option value="EDUCACAO INFANTIL">Educação Infantil</option>
                    <option value="ANOS INICIAIS">Anos Iniciais</option>
                    <option value="ANOS FINAIS">Anos Finais</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="modalidade">Modalidade</label>
                <select name="modalidade" id="modalidade" class="form-control">
                    <option value="" selected>selecione</option>
                    <option value="ENSINO REGULAR">Ensino Regular</option>
                    <option value="EDUCACAO DE JOVENS E ADULTOS">Educação de Jovens e Adultos</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="hora_inicio">Hora início</label>
                <select name="hora_inicio" id="hora_inicio" class="form-control">
                    <option value="" selected>selecione</option>
                    <option value="07:00">07:00</option>
                    <option value="13:00">13:00</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="hora_termino">Hora término</label>
                <select name="hora_termino" id="hora_termino" class="form-control">
                    <option value="" selected>selecione</option>
                    <option value="11:00">11:00</option>
                    <option value="17:00">17:00</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
                <a class="btn btn-warning" href="<?= URL ?>/turmas/index/">Voltar</a>
            </div>
        </div>
    </form>
</div>
<br>
<br>