<?php

/**
 * All rights reserved.
 * License: see LICENSE.txt
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS ``AS
 * IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL COPYRIGHT HOLDERS OR CONTRIBUTORS
 * BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
**/

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
//
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// CONFIGURE PHP
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// DEBUG || TESTING
if ( isEnv(EnvT::DEV) || isEnv(EnvT::TEST) ) {
    ini_set( EPHPOptions::ASSERT_ACTIVE, '1' );
    ini_set( EPHPOptions::ASSERT_BAIL, '1' );
    ini_set( EPHPOptions::ASSERT_WARNING, '0' );
    ini_set( EPHPOptions::ASSERT_EXCEPTION, '1' );
} else {
    ini_set( EPHPOptions::ASSERT_ACTIVE, '0' );
    ini_set( EPHPOptions::ASSERT_BAIL, '0' );
    ini_set( EPHPOptions::ASSERT_WARNING, '1' );
    ini_set( EPHPOptions::ASSERT_EXCEPTION, '0' );
}

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
