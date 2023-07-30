# # GetPhoneOutboundRuleAction200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**group** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**phoneoutboundrule** | **string** | ObjectId (unique 12 bytes ID) |
**status** | **int** |  | [optional] [default to self::STATUS_1]
**priority** | **int** |  | [default to 1]
**startingChars** | **string** |  | [optional]
**contains** | **string** |  | [optional]
**lengthType** | **string** |  | [optional]
**length** | **int** |  | [optional]
**appendChars** | **string** |  | [optional]
**prependChars** | **string** |  | [optional]
**rangeStart** | **int** |  | [optional]
**rangeEnd** | **int** |  | [optional]
**removeStartingChars** | **int** |  | [optional]
**removeEndingChars** | **int** |  | [optional]
**route** | **string** |  | [default to 'default']
**routingType** | **string** |  | [optional]
**id** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**updatedByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
