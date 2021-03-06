<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
        //Equipment

        class Equipment extends MY_Controller {
                public function index(){
                        $data['equipment'] = $this->Equipment_model->get_equipment();

                        $data['title'] = 'Equipment';

                        $this->load->view('templates/header/header', $data);
                        $this->load->view('equipment/index', $data);
                        $this->load->view('templates/footer/footer');
                }

                public function view($eq_id = null){
                        $data['equipment'] = $this->Equipment_model->get_equipment($eq_id);
                        $data['categories'] = $this->Equipment_model->get_categories();
                        $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();
                        $data['issues'] = $this->Equipment_model->get_equipment_issues($eq_id);
                        $data['locations'] = $this->Equipment_model->get_equipment_locations($eq_id);
                        $data['equipmentlocations'] = $this->Equipment_model->get_equipment_locations(FALSE);
                        $data['suppliers'] = $this->Suppliers_model->get_suppliers();
                        $data['events'] = $this->Equipment_model->get_events($eq_id);

                        if (empty($data['equipment'])) {
                            show_404();
                        }

                        $data['title'] = $data['equipment']['eq_name'];

                        $this->load->view('templates/header/header', $data);
                        $this->load->view('equipment/view', $data);
                        $this->load->view('templates/footer/footer');
                }

                public function create(){

                    $data['categories'] = $this->Equipment_model->get_categories();
                    $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();
                    $data['equipmentlocations'] = $this->Equipment_model->get_equipment_locations(FALSE);
                    $data['suppliers'] = $this->Suppliers_model->get_suppliers();
                    $data['title'] = 'Create Equipment';

                    $this->form_validation->set_rules('eq_name', 'Name', 'required');

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header', $data);
                        $this->load->view('equipment/create', $data);
                        $this->load->view('templates/footer/footer');
                    } else {
                        $this->Equipment_model->create_equipment();
                        redirect('equipment');
                    }
                }

                public function delete($eq_id){

                    $this->Equipment_model->delete_equipment($eq_id);
                    redirect('equipment');
                }

                public function edit($eq_id){

                    $data['equipment'] = $this->Equipment_model->get_equipment($eq_id);
                    $data['categories'] = $this->Equipment_model->get_categories();
                    $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();
                    $data['suppliers'] = $this->Suppliers_model->get_suppliers();

                    if(empty($data['equipment'])){
                            show_404();
                    }

                    $data['title'] = $data['equipment']['eq_name'];

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('equipment/update', $data);
                    $this->load->view('templates/footer/footer');
                }

                public function update(){

                    $this->Equipment_model->update_equipment();
                    redirect('equipment');
                }


                public function select_edit(){ 

                    $data['equipment'] = $this->Equipment_model->get_equipment();

                    $data['title'] = 'Edit';

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('equipment/edit', $data);
                    $this->load->view('templates/footer/footer');
                }
                
                public function select_delete(){ 

                    $data['equipment'] = $this->Equipment_model->get_equipment();

                    $data['title'] = 'Delete';

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('equipment/delete', $data);
                    $this->load->view('templates/footer/footer');
                }


                //Equipment Groups

                public function eqgroups_index(){

                    $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();

                    $data['title'] = 'Equipment Groups';

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('equipmentgroups/index', $data);
                    $this->load->view('templates/footer/footer');
                }

                public function eqgroups_view($eqgroup_id = null){

                    $data['equipmentgroup'] = $this->Equipment_model->get_equipment_groups($eqgroup_id);
                    $data['items'] = $this->Equipment_model->get_group_equipment($eqgroup_id);
                    $data['categories'] = $this->Equipment_model->get_categories();

                    if(empty($data['equipmentgroup'])){
                            show_404();
                    }

                    $data['title'] = $data['equipmentgroup']['eqgroup_name'];

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('equipmentgroups/view', $data);
                    $this->load->view('templates/footer/footer');
                }

                public function eqgroups_create(){

                    $data['categories'] = $this->Equipment_model->get_categories();
                    $data['equipment'] = $this->Equipment_model->get_equipment();

                    $data['title'] = 'Create Equipment';

                    $this->form_validation->set_rules('eq_name', 'Name', 'required');

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header', $data);
                        $this->load->view('equipmentgroups/create', $data);
                        $this->load->view('templates/footer/footer');
                    } else {
                            $this->Equipment_model->create_equipment();
                            redirect('equipment');
                    }
                }

                public function eqgroups_delete($eqgroup_id){

                    $this->Equipment_model->delete_equipment($eq_id);
                    redirect('equipment');
                }

                public function eqgroups_edit($eqgroup_id){

                    $data['equipmentgroup'] = $this->Equipment_model->get_equipment_groups($eqgroup_id);
                    $data['categories'] = $this->Equipment_model->get_categories();
                    $data['equipment'] = $this->Equipment_model->get_equipment();

                    if(empty($data['equipmentgroup'])){
                            show_404();
                    }

                    $data['title'] = 'Edit Group';

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('equipmentgroups/update', $data);
                    $this->load->view('templates/footer/footer');
                }

                public function eqgroups_update(){

                    $this->Equipment_model->update_equipment_group();
                    redirect('equipment-groups');
                }

                public function delete_equipment_location($eq_id,$loc_id){ 
                    $result = $this->Equipment_model->delete_equipment_location($eq_id,$loc_id);
                    redirect('equipment/view/' . $eq_id);
                }
                public function update_equipment_location(){ 
                    //$result = $this->Equipment_model->update_equipment_location($eq_id,$loc_id,$qty);
                    $result = $this->Equipment_model->update_equipment_location();
                    redirect('equipment/view/' . $this->input->post('eqloc_eq_id'));
                }
                public function insert_equipment_location(){ 
                    $result = $this->Equipment_model->insert_equipment_location();
                    redirect('equipment/view/' . $this->input->post('eqloc_eq_id'));
                }
        }
