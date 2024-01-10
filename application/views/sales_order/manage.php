<?php $this->load->view("partial/header"); ?>
<div id="title_bar" class="print_hide btn-toolbar">
    <button onclick="javascript:printdoc()" class='btn btn-info btn-sm pull-right'>
        <span class="glyphicon glyphicon-print">&nbsp</span><?php echo $this->lang->line('common_print'); ?>
    </button>
</div>

<div id="table_holder">
    <p>Test</p>
    <table id="table"></table>
</div>

<?php $this->load->view("partial/footer"); ?>
