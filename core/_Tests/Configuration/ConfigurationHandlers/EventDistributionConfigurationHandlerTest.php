<?php
namespace Swiftriver\Core;
require_once 'PHPUnit/Framework.php';
class EventDistributionConfigurationHandlerTest extends \PHPUnit_Framework_TestCase {
    public function testWithMockConfig() {
        include_once(dirname(__FILE__)."/../../../Setup.php");
        $config = new Configuration\ConfigurationHandlers\EventDistributionConfigurationHandler(dirname(__FILE__)."/MockEventDistributionConfiguration.xml");
        $this->assertEquals(1, count($config->EventHandlers));
    }

    public function testSaveWithMockConfig() {
        include_once(dirname(__FILE__)."/../../../Setup.php");
        $config = new Configuration\ConfigurationHandlers\EventDistributionConfigurationHandler(dirname(__FILE__)."/MockEventDistributionConfiguration.xml");
        $config->EventHandlers = array();
        $config->Save();
        $config = new Configuration\ConfigurationHandlers\EventDistributionConfigurationHandler(dirname(__FILE__)."/MockEventDistributionConfiguration.xml");
        $config->EventHandlers = array(
            new ObjectModel\EventHandlerEntry("test", "testclass", "testpath")
        );
        $config->Save();

    }
}
?>
