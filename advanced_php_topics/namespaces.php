<?php

namespace Acme\Utils;

class Helper
{
    public function greet($name)
    {
        return "Hello, $name!";
    }
}
?>

<?php

use Acme\Utils\Helper as UtilsHelper;

$helper = new UtilsHelper();
echo $helper->greet('Alice'); // Output: Hello, Alice!

?>