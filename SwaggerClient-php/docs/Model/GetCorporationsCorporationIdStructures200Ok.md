# GetCorporationsCorporationIdStructures200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**structure_id** | **int** | The Item ID of the structure | 
**type_id** | **int** | The type id of the structure | 
**corporation_id** | **int** | ID of the corporation that owns the structure | 
**system_id** | **int** | The solar system the structure is in | 
**profile_id** | **int** | The id of the ACL profile for this citadel | 
**current_vul** | [**\Swagger\Client\Model\GetCorporationsCorporationIdStructuresCurrentVul[]**](GetCorporationsCorporationIdStructuresCurrentVul.md) | This week&#39;s vulnerability windows, Monday is day 0 | 
**next_vul** | [**\Swagger\Client\Model\GetCorporationsCorporationIdStructuresNextVul[]**](GetCorporationsCorporationIdStructuresNextVul.md) | Next week&#39;s vulnerability windows, Monday is day 0 | 
**fuel_expires** | [**\DateTime**](\DateTime.md) | Date on which the structure will run out of fuel | [optional] 
**services** | [**\Swagger\Client\Model\GetCorporationsCorporationIdStructuresService[]**](GetCorporationsCorporationIdStructuresService.md) | Contains a list of service upgrades, and their state | [optional] 
**state_timer_start** | [**\DateTime**](\DateTime.md) | Date at which the structure entered it&#39;s current state | [optional] 
**state_timer_end** | [**\DateTime**](\DateTime.md) | Date at which the structure will move to it&#39;s next state | [optional] 
**unanchors_at** | [**\DateTime**](\DateTime.md) | Date at which the structure will unanchor | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


