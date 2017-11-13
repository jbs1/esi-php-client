# GetCorporationsCorporationIdContracts200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_id** | **int** | contract_id integer | 
**issuer_id** | **int** | Character ID for the issuer | 
**issuer_corporation_id** | **int** | Character&#39;s corporation ID for the issuer | 
**assignee_id** | **int** | ID to whom the contract is assigned, can be corporation or character ID | 
**acceptor_id** | **int** | Who will accept the contract | 
**start_location_id** | **int** | Start location ID (for Couriers contract) | [optional] 
**end_location_id** | **int** | End location ID (for Couriers contract) | [optional] 
**type** | **string** | Type of the contract | 
**status** | **string** | Status of the the contract | 
**title** | **string** | Title of the contract | [optional] 
**for_corporation** | **bool** | true if the contract was issued on behalf of the issuer&#39;s corporation | 
**availability** | **string** | To whom the contract is available | 
**date_issued** | [**\DateTime**](\DateTime.md) | Сreation date of the contract | 
**date_expired** | [**\DateTime**](\DateTime.md) | Expiration date of the contract | 
**date_accepted** | [**\DateTime**](\DateTime.md) | Date of confirmation of contract | [optional] 
**days_to_complete** | **int** | Number of days to perform the contract | [optional] 
**date_completed** | [**\DateTime**](\DateTime.md) | Date of completed of contract | [optional] 
**price** | **float** | Price of contract (for ItemsExchange and Auctions) | [optional] 
**reward** | **float** | Remuneration for contract (for Couriers only) | [optional] 
**collateral** | **float** | Collateral price (for Couriers only) | [optional] 
**buyout** | **float** | Buyout price (for Auctions only) | [optional] 
**volume** | **float** | Volume of items in the contract | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


