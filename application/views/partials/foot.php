        
        <!-- Optional JavaScript -->
        <script src="<?php echo base_url();?>assets/js/sidebar/sidebar.js" ></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url();?>assets/js/jquery_3.6.0.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
        <!-- <script src="<?php echo base_url();?>assets/js/plugin/sweetalert2.min.js"></script> -->
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/index.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
        <script type="text/javascript">
           
            //behaviour of datatables
            var datatable = new DataTable('#example', {
                initComplete: function () {
                    this.api()
                        .columns()
                        .every(function () {
                            let column = this;
                            let title = column.footer().textContent;

                            // Create input element
                            let input = document.createElement('input');
                            input.placeholder = title;
                            column.footer().replaceChildren(input);

                            // display input element at the top
                            var r = $('#example tfoot tr');
                            r.find('th').each(function(){
                                $(this).css('padding', 8);
                            });
                            $('#example thead').append(r);
                            $('#search_0').css('text-align', 'center');
            
                            // Event listener for user input
                            input.addEventListener('keyup', () => {
                                if (column.search() !== this.value) {
                                    column.search(input.value).draw();
                                }
                            });
                        });
                    }
                }); 
        </script>
    </body>
</html>