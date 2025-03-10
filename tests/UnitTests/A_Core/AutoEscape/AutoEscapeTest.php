<?php
/*
 * This file is part of the Smarty PHPUnit tests.
 */

/**
 * class for 'escapeHtml' property tests
 *
 * 
 * 
 * 
 */
class AutoEscapeTest extends PHPUnit_Smarty
{
    /*
     * Setup test fixture
     */
    public function setUp(): void
    {
        $this->setUpSmarty(__DIR__);
        $this->smarty->setEscapeHtml(true);
    }

    /**
     * test 'escapeHtml' property
     */
    public function testAutoEscape()
    {
        $tpl = $this->smarty->createTemplate('eval:{$foo}');
        $tpl->assign('foo', '<a@b.c>');
        $this->assertEquals("&lt;a@b.c&gt;", $this->smarty->fetch($tpl));
    }
}
