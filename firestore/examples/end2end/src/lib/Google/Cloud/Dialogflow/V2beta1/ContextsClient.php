<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\Dialogflow\V2beta1;

/**
 * Manages contexts.
 *
 *
 * Refer to the [Dialogflow documentation](https://dialogflow.com/docs/contexts)
 * for more details about contexts.
 * #
 */
class ContextsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the list of all contexts in the specified session.
     * @param \Google\Cloud\Dialogflow\V2beta1\ListContextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListContexts(\Google\Cloud\Dialogflow\V2beta1\ListContextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Contexts/ListContexts',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\ListContextsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the specified context.
     * @param \Google\Cloud\Dialogflow\V2beta1\GetContextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetContext(\Google\Cloud\Dialogflow\V2beta1\GetContextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Contexts/GetContext',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\Context', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a context.
     * @param \Google\Cloud\Dialogflow\V2beta1\CreateContextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateContext(\Google\Cloud\Dialogflow\V2beta1\CreateContextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Contexts/CreateContext',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\Context', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the specified context.
     * @param \Google\Cloud\Dialogflow\V2beta1\UpdateContextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateContext(\Google\Cloud\Dialogflow\V2beta1\UpdateContextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Contexts/UpdateContext',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\Context', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the specified context.
     * @param \Google\Cloud\Dialogflow\V2beta1\DeleteContextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteContext(\Google\Cloud\Dialogflow\V2beta1\DeleteContextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Contexts/DeleteContext',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes all active contexts in the specified session.
     * @param \Google\Cloud\Dialogflow\V2beta1\DeleteAllContextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAllContexts(\Google\Cloud\Dialogflow\V2beta1\DeleteAllContextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Contexts/DeleteAllContexts',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
