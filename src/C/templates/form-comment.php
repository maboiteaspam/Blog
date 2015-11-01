<?php
/* @var $this \C\View\ConcreteContext */
/* @var $form Symfony\Component\Form\FormView  */
?>

FORM FORM FORM

<?php
echo date("Y-m-d H:i:s");
echo $this->form_start($form);
echo $this->form_row($form['email']);
echo $this->form_row($form['name']);
echo $this->form_row($form['comment'], ['type'=>'textarea']);
echo $this->form_end($form);
?>
