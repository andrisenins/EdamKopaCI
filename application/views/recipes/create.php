<h2>Jaunas receptes pievienošanas lapa</h2>

        <?php
        
        echo form_open('recipes/create'); 
        
        echo validation_errors();
        
        echo "<p>Receptes nosaukums: ";
        echo form_input('title', $this->input->post('title'));        
        echo "</p>";
        
        echo "<p>Recepte: ";
        echo form_textarea('text');        
        echo "</p>";
        
        echo "<p>";
        echo form_submit('submit', 'Veikt jaunu receptes ierakstu');        
        echo "</p>";
        echo form_close();
        
        ?>