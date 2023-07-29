# # Callqueues

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**strategy** | **string** |  |
**announcePosition** | **int** |  | [optional]
**moh** | **string** |  | [default to 'deafult']
**callerResumeTimeout** | **int** |  | [default to 3600]
**maxWaitTime** | **int** |  | [default to 300]
**maxWaitTimeNoAgent** | **int** |  | [default to 300]
**maxNoAnswer** | **int** |  | [default to 1000000]
**noAnswerDelayTimeout** | **int** |  | [optional] [default to 60]
**rejectTimeout** | **int** |  | [optional] [default to 60]
**busyTimeout** | **int** |  | [optional] [default to 60]
**wrapUpTimeout** | **int** |  | [optional] [default to 10]
**timeBasedScore** | **string** |  | [default to 'queue']
**tierRulesApply** | **bool** |  | [default to false]
**tierRuleNoAgentNoWait** | **bool** |  | [default to true]
**tierRuleWaitSecond** | **int** |  | [optional] [default to 300]
**tierRuleWaitMultiplyLevel** | **bool** |  | [default to true]
**abandonedResumeAllowed** | **bool** |  | [default to true]
**discardAbandonedAfter** | **int** |  | [optional] [default to 14400]
**maxWaitTimeNoAgentTimeReached** | **int** |  | [default to 5]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
