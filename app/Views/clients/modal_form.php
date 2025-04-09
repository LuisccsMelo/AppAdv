<?php echo form_open(get_uri("clients/save"), array("id" => "client-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <div class="text-center mb-3">
        <button type="button" class="btn btn-primary" id="btn_pf">Pessoa Física</button>
        <button type="button" class="btn btn-secondary" id="btn_pj">Pessoa Jurídica</button>
    </div>

    <div id="form_pf" class="container-fluid">
        <div class="row mb-2 align-items-center">
            <label for="nome_completo" class="col-md-3 col-form-label">Nome Completo:</label>
            <div class="col-md-9">
                <input type="text" name="nome_completo" id="nome_completo" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="nacionalidade" class="col-md-3 col-form-label">Nacionalidade:</label>
            <div class="col-md-9">
                <input type="text" name="nacionalidade" id="nacionalidade" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="estado_civil" class="col-md-3 col-form-label">Estado Civil:</label>
            <div class="col-md-9">
                <input type="text" name="estado_civil" id="estado_civil" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="profissao" class="col-md-3 col-form-label">Profissão:</label>
            <div class="col-md-9">
                <input type="text" name="profissao" id="profissao" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <label for="data_nascimento" class="col-md-3 col-form-label">Data de Nascimento:</label>
            <div class="col-md-4">
                <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" onchange="calcularIdade()">
            </div>
            <label for="idade" class="col-md-2 col-form-label">Idade:</label>
            <div class="col-md-3 d-flex align-items-center">
                <button type="button" class="btn btn-outline-secondary btn-sm me-1" onclick="alterarIdade(-1)">−</button>
                <input type="text" id="idade" name="idade" class="form-control text-center" readonly>
                <button type="button" class="btn btn-outline-secondary btn-sm ms-1" onclick="alterarIdade(1)">+</button>
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="cpf" class="col-md-3 col-form-label">CPF:</label>
            <div class="col-md-9">
                <input type="text" name="cpf" id="cpf" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="endereco" class="col-md-3 col-form-label">Endereço:</label>
            <div class="col-md-9">
                <input type="text" name="endereco" id="endereco" class="form-control">
            </div>
        </div>

        <!-- Telefones lado a lado -->
        <div class="row mb-2 align-items-center">
            <label for="telefone1" class="col-md-3 col-form-label">Telefone 1:</label>
            <div class="col-md-4">
                <input type="text" name="telefone1" id="telefone1" class="form-control">
            </div>
            <label for="telefone2" class="col-md-2 col-form-label">Telefone 2:</label>
            <div class="col-md-3">
                <input type="text" name="telefone2" id="telefone2" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="email" class="col-md-3 col-form-label">E-mail:</label>
            <div class="col-md-9">
                <input type="email" name="email" id="email" class="form-control">
            </div>
        </div>

        <!-- Prioridade e Qual? na mesma linha -->
        <div class="row mb-2 align-items-center">
            <label class="col-md-3 col-form-label">Prioridade?</label>
            <div class="col-md-4">
                <label class="me-3"><input type="radio" name="prioridade" value="sim"> Sim</label>
                <label><input type="radio" name="prioridade" value="nao"> Não</label>
            </div>
            <label for="qual_prioridade" class="col-md-2 col-form-label">Qual?</label>
            <div class="col-md-3">
                <input type="text" name="qual_prioridade" id="qual_prioridade" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <label for="observacoes" class="col-md-3 col-form-label">Observações:</label>
            <div class="col-md-9">
                <textarea name="observacoes" id="observacoes" class="form-control" rows="3"></textarea>
            </div>
        </div>
    </div>

    <div id="form_pj" class="container-fluid" style="display: none;">

        <div class="row mb-2 align-items-center">
            <label for="cliente" class="col-md-3 col-form-label">Cliente:</label>
            <div class="col-md-9">
                <input type="text" name="cliente" id="cliente" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="razao_social" class="col-md-3 col-form-label">Razão Social:</label>
            <div class="col-md-9">
                <input type="text" name="razao_social" id="razao_social" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="nome_fantasia" class="col-md-3 col-form-label">Nome Fantasia:</label>
            <div class="col-md-9">
                <input type="text" name="nome_fantasia" id="nome_fantasia" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="cnpj" class="col-md-3 col-form-label">CNPJ:</label>
            <div class="col-md-9">
                <input type="text" name="cnpj" id="cnpj" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="insc_estadual" class="col-md-3 col-form-label">Inscrição Estadual:</label>
            <div class="col-md-9">
                <input type="text" name="insc_estadual" id="insc_estadual" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="insc_municipal" class="col-md-3 col-form-label">Inscrição Municipal:</label>
            <div class="col-md-9">
                <input type="text" name="insc_municipal" id="insc_municipal" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="tipo_empresa" class="col-md-3 col-form-label">Tipo:</label>
            <div class="col-md-9">
                <select name="tipo_empresa" id="tipo_empresa" class="form-control">
                    <option value="Matriz">Matriz</option>
                    <option value="Filial">Filial</option>
                </select>
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="endereco_pj" class="col-md-3 col-form-label">Endereço:</label>
            <div class="col-md-9">
                <input type="text" name="endereco_pj" id="endereco_pj" class="form-control">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <label for="telefone1" class="col-md-3 col-form-label">Telefone 1:</label>
            <div class="col-md-4">
                <input type="text" name="telefone1" id="telefone1" class="form-control">
            </div>
            <label for="telefone2" class="col-md-2 col-form-label">Telefone 2:</label>
            <div class="col-md-3">
                <input type="text" name="telefone2" id="telefone2" class="form-control">
            </div>
        </div>

    </div>

</div>


<div class="modal-footer">
    <div id="link-of-add-contact-modal" class="hide">
        <?php echo modal_anchor(get_uri("clients/add_new_contact_modal_form"), "", array()); ?>
    </div>

    <button type="button" class="btn btn-default" data-bs-dismiss="modal"><span data-feather="x" class="icon-16"></span> <?php echo app_lang('close'); ?></button>
    <?php if (!$model_info->id) { ?>
        <button type="button" id="save-and-continue-button" class="btn btn-info text-white"><span data-feather="check-circle" class="icon-16"></span> <?php echo app_lang('save_and_continue'); ?></button>
    <?php } ?>
    <button type="submit" class="btn btn-primary"><span data-feather="check-circle" class="icon-16"></span> <?php echo app_lang('save'); ?></button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function () {
        var ticket_id = "<?php echo $ticket_id; ?>";

        window.clientForm = $("#client-form").appForm({
            closeModalOnSuccess: false,
            onSuccess: function (result) {
                var $addMultipleContactsLink = $("#link-of-add-contact-modal").find("a");

                if (result.view === "details" || ticket_id) {
                    if (window.showAddNewModal) {
                        $addMultipleContactsLink.attr("data-post-client_id", result.id);
                        $addMultipleContactsLink.attr("data-title", "<?php echo app_lang('add_multiple_contacts') ?>");
                        $addMultipleContactsLink.attr("data-post-add_type", "multiple");

                        $addMultipleContactsLink.trigger("click");
                    } else {
                        appAlert.success(result.message, {duration: 10000});
                        setTimeout(function () {
                            location.reload();
                        }, 500);
                    }
                } else if (window.showAddNewModal) {
                    $addMultipleContactsLink.attr("data-post-client_id", result.id);
                    $addMultipleContactsLink.attr("data-title", "<?php echo app_lang('add_multiple_contacts') ?>");
                    $addMultipleContactsLink.attr("data-post-add_type", "multiple");

                    $addMultipleContactsLink.trigger("click");

                    $("#client-table").appTable({newData: result.data, dataId: result.id});
                } else {
                    $("#client-table").appTable({newData: result.data, dataId: result.id});
                    window.clientForm.closeModal();
                }
            }
        });
        setTimeout(function () {
            $("#company_name").focus();
        }, 200);

        //save and open add new contact member modal
        window.showAddNewModal = false;

        $("#save-and-continue-button").click(function () {
            window.showAddNewModal = true;
            $(this).trigger("submit");
        });
    });
</script>
<script>
    function calcularIdade() {
        const nascimento = new Date(document.getElementById("data_nascimento").value);
        const hoje = new Date();
        let idade = hoje.getFullYear() - nascimento.getFullYear();
        const m = hoje.getMonth() - nascimento.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
            idade--;
        }
        document.getElementById("idade").value = idade;
    }

    function alterarIdade(valor) {
        const campo = document.getElementById("idade");
        let idade = parseInt(campo.value || "0");
        idade += valor;
        if (idade < 0) idade = 0;
        campo.value = idade;
    }

    // Alternar entre Pessoa Física e Jurídica
    document.getElementById("btn_pf").onclick = function () {
        document.getElementById("form_pf").style.display = "block";
        document.getElementById("form_pj").style.display = "none";
        this.classList.add("btn-primary");
        this.classList.remove("btn-secondary");
        document.getElementById("btn_pj").classList.remove("btn-primary");
        document.getElementById("btn_pj").classList.add("btn-secondary");
    };

    document.getElementById("btn_pj").onclick = function () {
        document.getElementById("form_pf").style.display = "none";
        document.getElementById("form_pj").style.display = "block";
        this.classList.add("btn-primary");
        this.classList.remove("btn-secondary");
        document.getElementById("btn_pf").classList.remove("btn-primary");
        document.getElementById("btn_pf").classList.add("btn-secondary");
    };
</script>
