# Simple Pagination Lib for Codeigniter
---
### Installation
``` 
1. download from git or clone
2. extract file download
3. copy file CustomPagination.php to folder `applications/libraries`
```

### Usage

#### 1. Load Libraries
load libraries in your controller.
```php
public function __construct()
    {
        parent::__construct();
        $this->load->library('custompagination');
    }
```

#### 2. Call `render()`
``` php
$baseUrl    = 'backoffice/books';
$totalRows  = 100;

$data = [
    'pagination' => $this->custompagination->render($baseUrl, $totalRows)
];

 $this->load->view("Backoffice/Books/index.php", $data);
```

#### 3. Call `$pagination` in view
```html
 <p>
    <?php echo $pagination; ?>
</p>
```