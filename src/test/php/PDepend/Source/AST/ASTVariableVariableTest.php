<?php
/**
 * This file is part of PDepend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2017 Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2017 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */

namespace PDepend\Source\AST;

/**
 * Test case for the {@link \PDepend\Source\AST\ASTVariableVariable} class.
 *
 * @copyright 2008-2017 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 *
 * @covers \PDepend\Source\Language\PHP\AbstractPHPParser
 * @covers \PDepend\Source\AST\ASTVariableVariable
 * @group unittest
 */
class ASTVariableVariableTest extends ASTNodeTest
{
    /**
     * testVariableVariable
     *
     * @return \PDepend\Source\AST\ASTVariableVariable
     * @since 1.0.2
     */
    public function testVariableVariable()
    {
        $variable = $this->getFirstVariableVariableInClass();
        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTVariableVariable', $variable);

        return $variable;
    }
    
    /**
     * testVariableVariableHasExpectedStartLine
     *
     * @param \PDepend\Source\AST\ASTVariableVariable $variable
     *
     * @return void
     * @depends testVariableVariable
     */
    public function testVariableVariableHasExpectedStartLine($variable)
    {
        $this->assertEquals(6, $variable->getStartLine());
    }

    /**
     * testVariableVariableHasExpectedStartColumn
     *
     * @param \PDepend\Source\AST\ASTVariableVariable $variable
     *
     * @return void
     * @depends testVariableVariable
     */
    public function testVariableVariableHasExpectedStartColumn($variable)
    {
        $this->assertEquals(9, $variable->getStartColumn());
    }

    /**
     * testVariableVariableHasExpectedEndLine
     *
     * @param \PDepend\Source\AST\ASTVariableVariable $variable
     *
     * @return void
     * @depends testVariableVariable
     */
    public function testVariableVariableHasExpectedEndLine($variable)
    {
        $this->assertEquals(8, $variable->getEndLine());
    }

    /**
     * testVariableVariableHasExpectedEndColumn
     *
     * @param \PDepend\Source\AST\ASTVariableVariable $variable
     *
     * @return void
     * @depends testVariableVariable
     */
    public function testVariableVariableHasExpectedEndColumn($variable)
    {
        $this->assertEquals(12, $variable->getEndColumn());
    }

    /**
     * Returns a node instance for the currently executed test case.
     *
     * @param string $testCase Name of the calling test case.
     *
     * @return \PDepend\Source\AST\ASTVariableVariable
     */
    private function getFirstVariableVariableInClass()
    {
        return $this->getFirstNodeOfTypeInClass(
            $this->getCallingTestMethod(),
            'PDepend\\Source\\AST\\ASTVariableVariable'
        );
    }
}
