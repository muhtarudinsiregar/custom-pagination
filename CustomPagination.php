<?php

class CustomPagination
{
    protected $CI;
    protected $pagination;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('pagination');
        $this->pagination = $this->CI->pagination;
    }

    public function render($baseUrl, $totalRows)
    {
        $config['base_url'] = site_url($baseUrl);

        $config['total_rows'] = $totalRows;

        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }
}
