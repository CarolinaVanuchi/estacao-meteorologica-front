<div class="table-responsive-md table-responsive-lg table-responsive-sm">
    <table class="table table-sm table-striped table-hover " font-size: 1rem;>
        <thead>
            <tr>
                <th scope="col">Hora</th>
                <th scope="col">Temperatura</th>
            </tr>
        </thead>
        <tbody>

           <?php foreach($json_str->data as $e) { ?>
                <tr>   
                    <td><?php echo $e->req_time ?> </td>
                    <td><?php echo $e->temp ?> </td>
                </tr>

            <?php } ?>
           
        </tbody>
    </table>
   
</div>

