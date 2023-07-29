# # GetConferenceRoom200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**passcode** | **string** |  | [optional]
**dialInPin** | **int** |  | [optional]
**isUserRoom** | **bool** |  | [optional]
**isChatRoom** | **bool** |  | [optional]
**lobby** | **int** |  | [optional] [default to self::LOBBY_0]
**requirePasscode** | **int** |  | [optional] [default to self::REQUIRE_PASSCODE_0]
**share** | **string** |  | [optional]
**chatroom** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**updatedByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
