<?php

/**
 * Test class for Evil_Event_Observer.
 * Generated by PHPUnit on 2011-05-03 at 13:56:47.
 */
class Evil_Event_ObserverTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Evil_Event_Observer
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Evil_Event_Observer();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement testInit().
     */
    public function testInit()
    {
    }

    /**
     * @todo Implement testAddHandler().
     */
    public function testAddHandler()
    {
    }

    /**
     * @todo Implement testOn().
     */
    public function testOn()
    {
        $config = new Evil_Config(dirname(__FILE__) . '/event_config.json');
        $config->defaultPath = dirname(__FILE__);
        $this->object->init($config);
        $ev = $this->object;
        $ev('onUpdate');

        var_dump($ev('onStart',
            array(
                'S' => 'GeoLocator',
                'M'=> 'locate',
                'street' => 'Международная',
                'housenumber' => 77,
                'fields' => array('caddr'),
                'plugin' => 'GoogleGeo'
            )));
    }
}
?>
