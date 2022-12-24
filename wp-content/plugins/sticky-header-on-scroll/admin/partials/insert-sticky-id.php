<?php
	global $wpdb;
	$tablename = $wpdb->prefix . 'sticky_header_on_scroll';
	
      $my_header = $wpdb->get_var( "SELECT my_header FROM $tablename where id = 1 ");
 
      $scroll = $wpdb->get_var( "SELECT scroll FROM $tablename where id = 1 ");

      $bg_head_clr = $wpdb->get_var( "SELECT bg_head_clr FROM $tablename where id = 1 ");

      $scroll_to_top = $wpdb->get_var( "SELECT scroll_to_top FROM $tablename where id = 1 ");
	
?>



<div class="container">
        <div class="alert alert-info">
            <h1 style="font-size:40px;"> Sticky Header On Scroll </h1>
        </div>
        
        <div class="sticky-header-body">
            

                <form action="javascript:void(0)"  method="POST" id="add-sticky-header">
                    
                    <div class="sticky-header-input">
                        <label for="name">Insert Header Id or Class</label>
                        <input type="text" class="form-control" id="my-sticky-header" name="my-sticky-header" placeholder="Insert id or class" value="<?php echo $my_header;  ?>">
                        <span>Add only one element. ex. <strong>(#my-header)</strong> or <strong>(.my-header)</strong></span>
                    </div>  

                    <div class="sticky-header-input">      
                        <label for="name">Scroll in(px)</label>	
                        <input type="text" class="form-control" id="scroll-in-px" name="scroll-in-px" placeholder="On scroll" value="<?php echo $scroll;  ?>">
                        <span>After how many scroll(in px) the sticky header should appear?</span>
                    </div>    

                    <div class="sticky-header-input">
                        <label for="name">Background Color</label>
                        <input type="text" class="form-control" id="bg-head-clr" name="bg-head-clr" placeholder="#ffffff" value="<?php echo $bg_head_clr;  ?>">	
                        <span><strong>This will add background color to the header when sticky</strong></span>
                    </div>    

                    <div class="sticky-header-input">
                        <label for="name">Show Scroll to Top Button?</label>
                        <input type="checkbox" id="scroll-to-top" name="scroll-to-top" value="checked" <?php if($scroll_to_top == "checked"){echo "checked";}?> >
                        <span>This will add a div at the bottom of the website When OnClick will scroll to the top</span>
                    </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <h3 id="show-success-msg">  </h3>
            
	    </div>
</div>

