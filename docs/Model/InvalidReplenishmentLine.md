# # InvalidReplenishmentLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this replenishment line. |
**quantity_announced** | **int** | The amount of announced quantity for this replenishment line. |
**quantity_received** | **int** | The amount of received quantity for this replenishment line. |
**quantity_in_progress** | **int** | The amount of quantity that is still in progress at the warehouse for this replenishment line. |
**quantity_with_graded_state** | **int** | The quantity within this shipment line that has a graded (unsalable) state. |
**quantity_with_regular_state** | **int** | The quantity within this shipment line that has a regular (salable) state. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
