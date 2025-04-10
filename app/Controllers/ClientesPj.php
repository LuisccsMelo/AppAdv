<?php

class ClientesPj extends App_Controller {

    function __construct() {
        parent::__construct();
        $this->access_only_admin();
        $this->load->model("ClientesPj_model");
        $this->load->model("ClientesPf_model");
    }

    function index() {
        $view_data["clientes_pj"] = $this->ClientesPj_model->get_all();
        $view_data["clientes_pf"] = $this->ClientesPf_model->get_all(); // para preencher o select
        $this->template->rander("clientes_pj/index", $view_data);
    }

    function salvar() {
        $data = $this->input->post();
        $this->ClientesPj_model->save($data, $this->input->post("id"));
        redirect("clientespj");
    }
}
