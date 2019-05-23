#az ad sp create-for-rbac --role="Contributor" --scopes="/subscriptions/id-de-subscripc"
provider "azurerm" {
  subscription_id = ""
  client_id     = "" #appId
  client_secret = "" #password
  tenant_id       = "7"
}
resource "azurerm_resource_group" "rgid" {
  name     = "RGEU2CRD01"
  location = "East US 2"
}
resource "azurerm_container_registry" "acr" {
  name                     = ""
  resource_group_name      = "${azurerm_resource_group.rgid.name}"
  location                 = "${azurerm_resource_group.rgid.location}"
  sku                      = "Standard"
  admin_enabled            = true
}
