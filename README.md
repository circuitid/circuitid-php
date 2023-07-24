# circuitid

# Introduction
Circuit ID&reg; is an innovative cloud communications platform that redefines your connectivity experience. Our cutting-edge AI-powered solution seamlessly integrates calling, meetings, messaging, voicemail, fax, SIP Trunking, mobile broadband, and mobile phone services, accessible wherever you and your devices go.
                
Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide. 

We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.
                
Happy coding!

For more information, please visit [https://www.circuitid.com/](https://www.circuitid.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/circuitid/circuitid-php.git"
    }
  ],
  "require": {
    "circuitid/circuitid-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/circuitid/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AcceptedSendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acceptedsenders = new \OpenAPI\Client\CircuitID\Acceptedsenders(); // \OpenAPI\Client\CircuitID\Acceptedsenders | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createAcceptedSender($acceptedsenders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcceptedSendersApi->createAcceptedSender: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://rest.circuitid.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcceptedSendersApi* | [**createAcceptedSender**](docs/Api/AcceptedSendersApi.md#createacceptedsender) | **POST** /acceptedsenders | Create a new object
*AcceptedSendersApi* | [**findAcceptedSenders**](docs/Api/AcceptedSendersApi.md#findacceptedsenders) | **GET** /acceptedsenders | Find multiple objects
*AcceptedSendersApi* | [**getAcceptedSender**](docs/Api/AcceptedSendersApi.md#getacceptedsender) | **GET** /acceptedsenders/{id} | Get object by id
*AcceptedSendersApi* | [**patchAcceptedSender**](docs/Api/AcceptedSendersApi.md#patchacceptedsender) | **PATCH** /acceptedsenders/{id} | Patch object&#39;s data
*AcceptedSendersApi* | [**removeAcceptedSender**](docs/Api/AcceptedSendersApi.md#removeacceptedsender) | **DELETE** /acceptedsenders/{id} | Delete object by id
*AnnouncementsApi* | [**createAnnouncement**](docs/Api/AnnouncementsApi.md#createannouncement) | **POST** /announcements | Create a new object
*AnnouncementsApi* | [**findAnnouncements**](docs/Api/AnnouncementsApi.md#findannouncements) | **GET** /announcements | Find multiple objects
*AnnouncementsApi* | [**getAnnouncement**](docs/Api/AnnouncementsApi.md#getannouncement) | **GET** /announcements/{id} | Get object by id
*AnnouncementsApi* | [**patchAnnouncement**](docs/Api/AnnouncementsApi.md#patchannouncement) | **PATCH** /announcements/{id} | Patch object&#39;s data
*AnnouncementsApi* | [**removeAnnouncement**](docs/Api/AnnouncementsApi.md#removeannouncement) | **DELETE** /announcements/{id} | Delete object by id
*AppMarketplaceApi* | [**findAppMarketplace**](docs/Api/AppMarketplaceApi.md#findappmarketplace) | **GET** /appmarketplace | Find multiple objects
*AuthenticationApi* | [**createAuthentication**](docs/Api/AuthenticationApi.md#createauthentication) | **POST** /authentication | Create a new object
*CallQueueAgentsApi* | [**createCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#createcallqueueagent) | **POST** /callqueueagents | Create a new object
*CallQueueAgentsApi* | [**findCallQueueAgents**](docs/Api/CallQueueAgentsApi.md#findcallqueueagents) | **GET** /callqueueagents | Find multiple objects
*CallQueueAgentsApi* | [**getCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#getcallqueueagent) | **GET** /callqueueagents/{id} | Get object by id
*CallQueueAgentsApi* | [**patchCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#patchcallqueueagent) | **PATCH** /callqueueagents/{id} | Patch object&#39;s data
*CallQueueAgentsApi* | [**removeCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#removecallqueueagent) | **DELETE** /callqueueagents/{id} | Delete object by id
*CallQueuesApi* | [**createCallQueue**](docs/Api/CallQueuesApi.md#createcallqueue) | **POST** /callqueues | Create a new object
*CallQueuesApi* | [**findCallQueues**](docs/Api/CallQueuesApi.md#findcallqueues) | **GET** /callqueues | Find multiple objects
*CallQueuesApi* | [**getCallQueue**](docs/Api/CallQueuesApi.md#getcallqueue) | **GET** /callqueues/{id} | Get object by id
*CallQueuesApi* | [**patchCallQueue**](docs/Api/CallQueuesApi.md#patchcallqueue) | **PATCH** /callqueues/{id} | Patch object&#39;s data
*CallQueuesApi* | [**removeCallQueue**](docs/Api/CallQueuesApi.md#removecallqueue) | **DELETE** /callqueues/{id} | Delete object by id
*ChatRoomsApi* | [**createChatRoom**](docs/Api/ChatRoomsApi.md#createchatroom) | **POST** /chatrooms | Create a new object
*ChatRoomsApi* | [**findChatRooms**](docs/Api/ChatRoomsApi.md#findchatrooms) | **GET** /chatrooms | Find multiple objects
*ChatRoomsApi* | [**getChatRoom**](docs/Api/ChatRoomsApi.md#getchatroom) | **GET** /chatrooms/{id} | Get object by id
*ChatRoomsApi* | [**patchChatRoom**](docs/Api/ChatRoomsApi.md#patchchatroom) | **PATCH** /chatrooms/{id} | Patch object&#39;s data
*ChatRoomsApi* | [**removeChatRoom**](docs/Api/ChatRoomsApi.md#removechatroom) | **DELETE** /chatrooms/{id} | Delete object by id
*ClientsApi* | [**createClient**](docs/Api/ClientsApi.md#createclient) | **POST** /clients | Create a new object
*ClientsApi* | [**findClients**](docs/Api/ClientsApi.md#findclients) | **GET** /clients | Find multiple objects
*ClientsApi* | [**getClient**](docs/Api/ClientsApi.md#getclient) | **GET** /clients/{id} | Get object by id
*ClientsApi* | [**patchClient**](docs/Api/ClientsApi.md#patchclient) | **PATCH** /clients/{id} | Patch object&#39;s data
*ClientsApi* | [**removeClient**](docs/Api/ClientsApi.md#removeclient) | **DELETE** /clients/{id} | Delete object by id
*ConferenceNumbersApi* | [**findConferenceNumbers**](docs/Api/ConferenceNumbersApi.md#findconferencenumbers) | **GET** /conferencenumbers | Find multiple objects
*ConferenceRoomsApi* | [**createConferenceRoom**](docs/Api/ConferenceRoomsApi.md#createconferenceroom) | **POST** /conferencerooms | Create a new object
*ConferenceRoomsApi* | [**findConferenceRooms**](docs/Api/ConferenceRoomsApi.md#findconferencerooms) | **GET** /conferencerooms | Find multiple objects
*ConferenceRoomsApi* | [**getConferenceRoom**](docs/Api/ConferenceRoomsApi.md#getconferenceroom) | **GET** /conferencerooms/{id} | Get object by id
*ConferenceRoomsApi* | [**patchConferenceRoom**](docs/Api/ConferenceRoomsApi.md#patchconferenceroom) | **PATCH** /conferencerooms/{id} | Patch object&#39;s data
*ConferenceRoomsApi* | [**removeConferenceRoom**](docs/Api/ConferenceRoomsApi.md#removeconferenceroom) | **DELETE** /conferencerooms/{id} | Delete object by id
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | Create a new object
*ContactsApi* | [**findContacts**](docs/Api/ContactsApi.md#findcontacts) | **GET** /contacts | Find multiple objects
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /contacts/{id} | Get object by id
*ContactsApi* | [**patchContact**](docs/Api/ContactsApi.md#patchcontact) | **PATCH** /contacts/{id} | Patch object&#39;s data
*ContactsApi* | [**removeContact**](docs/Api/ContactsApi.md#removecontact) | **DELETE** /contacts/{id} | Delete object by id
*ConversationMessagesApi* | [**createConversationMessage**](docs/Api/ConversationMessagesApi.md#createconversationmessage) | **POST** /conversationmessages | Create a new object
*ConversationMessagesApi* | [**findConversationMessages**](docs/Api/ConversationMessagesApi.md#findconversationmessages) | **GET** /conversationmessages | Find multiple objects
*ConversationMessagesApi* | [**getConversationMessage**](docs/Api/ConversationMessagesApi.md#getconversationmessage) | **GET** /conversationmessages/{id} | Get object by id
*ConversationMessagesApi* | [**patchConversationMessage**](docs/Api/ConversationMessagesApi.md#patchconversationmessage) | **PATCH** /conversationmessages/{id} | Patch object&#39;s data
*ConversationMessagesApi* | [**removeConversationMessage**](docs/Api/ConversationMessagesApi.md#removeconversationmessage) | **DELETE** /conversationmessages/{id} | Delete object by id
*ConversationsApi* | [**createConversation**](docs/Api/ConversationsApi.md#createconversation) | **POST** /conversations | Create a new object
*ConversationsApi* | [**findConversations**](docs/Api/ConversationsApi.md#findconversations) | **GET** /conversations | Find multiple objects
*ConversationsApi* | [**getConversation**](docs/Api/ConversationsApi.md#getconversation) | **GET** /conversations/{id} | Get object by id
*ConversationsApi* | [**patchConversation**](docs/Api/ConversationsApi.md#patchconversation) | **PATCH** /conversations/{id} | Patch object&#39;s data
*ConversationsApi* | [**removeConversation**](docs/Api/ConversationsApi.md#removeconversation) | **DELETE** /conversations/{id} | Delete object by id
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | Create a new object
*CustomersApi* | [**findCustomers**](docs/Api/CustomersApi.md#findcustomers) | **GET** /customers | Find multiple objects
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /customers/{id} | Get object by id
*CustomersApi* | [**patchCustomer**](docs/Api/CustomersApi.md#patchcustomer) | **PATCH** /customers/{id} | Patch object&#39;s data
*CustomersApi* | [**removeCustomer**](docs/Api/CustomersApi.md#removecustomer) | **DELETE** /customers/{id} | Delete object by id
*DNSRecordsApi* | [**findDNSRecords**](docs/Api/DNSRecordsApi.md#finddnsrecords) | **GET** /dnsrecords | Find multiple objects
*DeveloperAppSubscriptionsApi* | [**createDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#createdeveloperappsubscription) | **POST** /developerappsubscriptions | Create a new object
*DeveloperAppSubscriptionsApi* | [**findDeveloperAppSubscriptions**](docs/Api/DeveloperAppSubscriptionsApi.md#finddeveloperappsubscriptions) | **GET** /developerappsubscriptions | Find multiple objects
*DeveloperAppSubscriptionsApi* | [**getDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#getdeveloperappsubscription) | **GET** /developerappsubscriptions/{id} | Get object by id
*DeveloperAppSubscriptionsApi* | [**patchDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#patchdeveloperappsubscription) | **PATCH** /developerappsubscriptions/{id} | Patch object&#39;s data
*DeveloperAppSubscriptionsApi* | [**removeDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#removedeveloperappsubscription) | **DELETE** /developerappsubscriptions/{id} | Delete object by id
*DeveloperAppsApi* | [**createDeveloperApp**](docs/Api/DeveloperAppsApi.md#createdeveloperapp) | **POST** /developerapps | Create a new object
*DeveloperAppsApi* | [**findDeveloperApps**](docs/Api/DeveloperAppsApi.md#finddeveloperapps) | **GET** /developerapps | Find multiple objects
*DeveloperAppsApi* | [**getDeveloperApp**](docs/Api/DeveloperAppsApi.md#getdeveloperapp) | **GET** /developerapps/{id} | Get object by id
*DeveloperAppsApi* | [**patchDeveloperApp**](docs/Api/DeveloperAppsApi.md#patchdeveloperapp) | **PATCH** /developerapps/{id} | Patch object&#39;s data
*DeveloperAppsApi* | [**removeDeveloperApp**](docs/Api/DeveloperAppsApi.md#removedeveloperapp) | **DELETE** /developerapps/{id} | Delete object by id
*DirectoriesApi* | [**createdirectory**](docs/Api/DirectoriesApi.md#createdirectory) | **POST** /directories | Create a new object
*DirectoriesApi* | [**findDirectories**](docs/Api/DirectoriesApi.md#finddirectories) | **GET** /directories | Find multiple objects
*DirectoriesApi* | [**getdirectory**](docs/Api/DirectoriesApi.md#getdirectory) | **GET** /directories/{id} | Get object by id
*DirectoriesApi* | [**patchdirectory**](docs/Api/DirectoriesApi.md#patchdirectory) | **PATCH** /directories/{id} | Patch object&#39;s data
*DirectoriesApi* | [**removedirectory**](docs/Api/DirectoriesApi.md#removedirectory) | **DELETE** /directories/{id} | Delete object by id
*DomainsApi* | [**createDomain**](docs/Api/DomainsApi.md#createdomain) | **POST** /domains | Create a new object
*DomainsApi* | [**findDomains**](docs/Api/DomainsApi.md#finddomains) | **GET** /domains | Find multiple objects
*DomainsApi* | [**getDomain**](docs/Api/DomainsApi.md#getdomain) | **GET** /domains/{id} | Get object by id
*DomainsApi* | [**patchDomain**](docs/Api/DomainsApi.md#patchdomain) | **PATCH** /domains/{id} | Patch object&#39;s data
*DomainsApi* | [**removeDomain**](docs/Api/DomainsApi.md#removedomain) | **DELETE** /domains/{id} | Delete object by id
*FaxAccountsApi* | [**createFaxAccount**](docs/Api/FaxAccountsApi.md#createfaxaccount) | **POST** /faxaccounts | Create a new object
*FaxAccountsApi* | [**findFaxAccounts**](docs/Api/FaxAccountsApi.md#findfaxaccounts) | **GET** /faxaccounts | Find multiple objects
*FaxAccountsApi* | [**getFaxAccount**](docs/Api/FaxAccountsApi.md#getfaxaccount) | **GET** /faxaccounts/{id} | Get object by id
*FaxAccountsApi* | [**patchFaxAccount**](docs/Api/FaxAccountsApi.md#patchfaxaccount) | **PATCH** /faxaccounts/{id} | Patch object&#39;s data
*FaxAccountsApi* | [**removeFaxAccount**](docs/Api/FaxAccountsApi.md#removefaxaccount) | **DELETE** /faxaccounts/{id} | Delete object by id
*FaxesApi* | [**createFax**](docs/Api/FaxesApi.md#createfax) | **POST** /faxes | Create a new object
*FaxesApi* | [**findFaxes**](docs/Api/FaxesApi.md#findfaxes) | **GET** /faxes | Find multiple objects
*FaxesApi* | [**getFax**](docs/Api/FaxesApi.md#getfax) | **GET** /faxes/{id} | Get object by id
*FaxesApi* | [**removeFax**](docs/Api/FaxesApi.md#removefax) | **DELETE** /faxes/{id} | Delete object by id
*FindNumbersApi* | [**findFindNumbers**](docs/Api/FindNumbersApi.md#findfindnumbers) | **GET** /findnumbers | Find multiple objects
*FirewallApi* | [**createFirewall**](docs/Api/FirewallApi.md#createfirewall) | **POST** /firewall | Create a new object
*FirewallApi* | [**findFirewall**](docs/Api/FirewallApi.md#findfirewall) | **GET** /firewall | Find multiple objects
*FirewallApi* | [**getFirewall**](docs/Api/FirewallApi.md#getfirewall) | **GET** /firewall/{id} | Get object by id
*FirewallApi* | [**patchFirewall**](docs/Api/FirewallApi.md#patchfirewall) | **PATCH** /firewall/{id} | Patch object&#39;s data
*FirewallApi* | [**removeFirewall**](docs/Api/FirewallApi.md#removefirewall) | **DELETE** /firewall/{id} | Delete object by id
*GroupMembersApi* | [**createGroupMember**](docs/Api/GroupMembersApi.md#creategroupmember) | **POST** /groupmembers | Create a new object
*GroupMembersApi* | [**findGroupMembers**](docs/Api/GroupMembersApi.md#findgroupmembers) | **GET** /groupmembers | Find multiple objects
*GroupMembersApi* | [**getGroupMember**](docs/Api/GroupMembersApi.md#getgroupmember) | **GET** /groupmembers/{id} | Get object by id
*GroupMembersApi* | [**patchGroupMember**](docs/Api/GroupMembersApi.md#patchgroupmember) | **PATCH** /groupmembers/{id} | Patch object&#39;s data
*GroupMembersApi* | [**removeGroupMember**](docs/Api/GroupMembersApi.md#removegroupmember) | **DELETE** /groupmembers/{id} | Delete object by id
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /groups | Create a new object
*GroupsApi* | [**findGroups**](docs/Api/GroupsApi.md#findgroups) | **GET** /groups | Find multiple objects
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /groups/{id} | Get object by id
*GroupsApi* | [**patchGroup**](docs/Api/GroupsApi.md#patchgroup) | **PATCH** /groups/{id} | Patch object&#39;s data
*GroupsApi* | [**removeGroup**](docs/Api/GroupsApi.md#removegroup) | **DELETE** /groups/{id} | Delete object by id
*HolidaysApi* | [**createHoliday**](docs/Api/HolidaysApi.md#createholiday) | **POST** /holidays | Create a new object
*HolidaysApi* | [**findHolidays**](docs/Api/HolidaysApi.md#findholidays) | **GET** /holidays | Find multiple objects
*HolidaysApi* | [**getHoliday**](docs/Api/HolidaysApi.md#getholiday) | **GET** /holidays/{id} | Get object by id
*HolidaysApi* | [**patchHoliday**](docs/Api/HolidaysApi.md#patchholiday) | **PATCH** /holidays/{id} | Patch object&#39;s data
*HolidaysApi* | [**removeHoliday**](docs/Api/HolidaysApi.md#removeholiday) | **DELETE** /holidays/{id} | Delete object by id
*InfoApi* | [**getInfo**](docs/Api/InfoApi.md#getinfo) | **GET** /info | Get object
*InvoiceItemsApi* | [**findInvoiceItems**](docs/Api/InvoiceItemsApi.md#findinvoiceitems) | **GET** /invoiceitems | Find multiple objects
*InvoiceItemsApi* | [**getInvoiceItem**](docs/Api/InvoiceItemsApi.md#getinvoiceitem) | **GET** /invoiceitems/{id} | Get object by id
*InvoicesApi* | [**findInvoices**](docs/Api/InvoicesApi.md#findinvoices) | **GET** /invoices | Find multiple objects
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /invoices/{id} | Get object by id
*LicensesApi* | [**createLicense**](docs/Api/LicensesApi.md#createlicense) | **POST** /licenses | Create a new object
*LicensesApi* | [**findLicenses**](docs/Api/LicensesApi.md#findlicenses) | **GET** /licenses | Find multiple objects
*LicensesApi* | [**getLicense**](docs/Api/LicensesApi.md#getlicense) | **GET** /licenses/{id} | Get object by id
*LicensesApi* | [**patchLicense**](docs/Api/LicensesApi.md#patchlicense) | **PATCH** /licenses/{id} | Patch object&#39;s data
*LicensesApi* | [**removeLicense**](docs/Api/LicensesApi.md#removelicense) | **DELETE** /licenses/{id} | Delete object by id
*MenuOptionsApi* | [**createMenuOption**](docs/Api/MenuOptionsApi.md#createmenuoption) | **POST** /menuoptions | Create a new object
*MenuOptionsApi* | [**findMenuOptions**](docs/Api/MenuOptionsApi.md#findmenuoptions) | **GET** /menuoptions | Find multiple objects
*MenuOptionsApi* | [**getMenuOption**](docs/Api/MenuOptionsApi.md#getmenuoption) | **GET** /menuoptions/{id} | Get object by id
*MenuOptionsApi* | [**patchMenuOption**](docs/Api/MenuOptionsApi.md#patchmenuoption) | **PATCH** /menuoptions/{id} | Patch object&#39;s data
*MenuOptionsApi* | [**removeMenuOption**](docs/Api/MenuOptionsApi.md#removemenuoption) | **DELETE** /menuoptions/{id} | Delete object by id
*MenusApi* | [**createMenu**](docs/Api/MenusApi.md#createmenu) | **POST** /menus | Create a new object
*MenusApi* | [**findMenus**](docs/Api/MenusApi.md#findmenus) | **GET** /menus | Find multiple objects
*MenusApi* | [**getMenu**](docs/Api/MenusApi.md#getmenu) | **GET** /menus/{id} | Get object by id
*MenusApi* | [**patchMenu**](docs/Api/MenusApi.md#patchmenu) | **PATCH** /menus/{id} | Patch object&#39;s data
*MenusApi* | [**removeMenu**](docs/Api/MenusApi.md#removemenu) | **DELETE** /menus/{id} | Delete object by id
*MessageBrandsApi* | [**createMessageBrand**](docs/Api/MessageBrandsApi.md#createmessagebrand) | **POST** /messagebrands | Create a new object
*MessageBrandsApi* | [**findMessageBrands**](docs/Api/MessageBrandsApi.md#findmessagebrands) | **GET** /messagebrands | Find multiple objects
*MessageBrandsApi* | [**getMessageBrand**](docs/Api/MessageBrandsApi.md#getmessagebrand) | **GET** /messagebrands/{id} | Get object by id
*MessageBrandsApi* | [**patchMessageBrand**](docs/Api/MessageBrandsApi.md#patchmessagebrand) | **PATCH** /messagebrands/{id} | Patch object&#39;s data
*MessageBrandsApi* | [**removeMessageBrand**](docs/Api/MessageBrandsApi.md#removemessagebrand) | **DELETE** /messagebrands/{id} | Delete object by id
*MessageCampaignsApi* | [**createMessageCampaign**](docs/Api/MessageCampaignsApi.md#createmessagecampaign) | **POST** /messagecampaigns | Create a new object
*MessageCampaignsApi* | [**findMessageCampaigns**](docs/Api/MessageCampaignsApi.md#findmessagecampaigns) | **GET** /messagecampaigns | Find multiple objects
*MessageCampaignsApi* | [**getMessageCampaign**](docs/Api/MessageCampaignsApi.md#getmessagecampaign) | **GET** /messagecampaigns/{id} | Get object by id
*MessageCampaignsApi* | [**patchMessageCampaign**](docs/Api/MessageCampaignsApi.md#patchmessagecampaign) | **PATCH** /messagecampaigns/{id} | Patch object&#39;s data
*MessageCampaignsApi* | [**removeMessageCampaign**](docs/Api/MessageCampaignsApi.md#removemessagecampaign) | **DELETE** /messagecampaigns/{id} | Delete object by id
*NumberPortsApi* | [**createNumberPort**](docs/Api/NumberPortsApi.md#createnumberport) | **POST** /numberports | Create a new object
*NumberPortsApi* | [**findNumberPorts**](docs/Api/NumberPortsApi.md#findnumberports) | **GET** /numberports | Find multiple objects
*NumberPortsApi* | [**getNumberPort**](docs/Api/NumberPortsApi.md#getnumberport) | **GET** /numberports/{id} | Get object by id
*NumberPortsApi* | [**patchNumberPort**](docs/Api/NumberPortsApi.md#patchnumberport) | **PATCH** /numberports/{id} | Patch object&#39;s data
*NumbersApi* | [**findNumbers**](docs/Api/NumbersApi.md#findnumbers) | **GET** /numbers | Find multiple objects
*NumbersApi* | [**getNumber**](docs/Api/NumbersApi.md#getnumber) | **GET** /numbers/{id} | Get object by id
*NumbersApi* | [**patchNumber**](docs/Api/NumbersApi.md#patchnumber) | **PATCH** /numbers/{id} | Patch object&#39;s data
*OfficesApi* | [**createOffice**](docs/Api/OfficesApi.md#createoffice) | **POST** /offices | Create a new object
*OfficesApi* | [**findOffices**](docs/Api/OfficesApi.md#findoffices) | **GET** /offices | Find multiple objects
*OfficesApi* | [**getOffice**](docs/Api/OfficesApi.md#getoffice) | **GET** /offices/{id} | Get object by id
*OfficesApi* | [**patchOffice**](docs/Api/OfficesApi.md#patchoffice) | **PATCH** /offices/{id} | Patch object&#39;s data
*OfficesApi* | [**removeOffice**](docs/Api/OfficesApi.md#removeoffice) | **DELETE** /offices/{id} | Delete object by id
*PhoneInboundRuleActionsApi* | [**createPhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#createphoneinboundruleaction) | **POST** /phoneinboundruleactions | Create a new object
*PhoneInboundRuleActionsApi* | [**findPhoneInboundRuleActions**](docs/Api/PhoneInboundRuleActionsApi.md#findphoneinboundruleactions) | **GET** /phoneinboundruleactions | Find multiple objects
*PhoneInboundRuleActionsApi* | [**getPhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#getphoneinboundruleaction) | **GET** /phoneinboundruleactions/{id} | Get object by id
*PhoneInboundRuleActionsApi* | [**patchPhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#patchphoneinboundruleaction) | **PATCH** /phoneinboundruleactions/{id} | Patch object&#39;s data
*PhoneInboundRuleActionsApi* | [**removePhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#removephoneinboundruleaction) | **DELETE** /phoneinboundruleactions/{id} | Delete object by id
*PhoneInboundRulesApi* | [**createPhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#createphoneinboundrule) | **POST** /phoneinboundrules | Create a new object
*PhoneInboundRulesApi* | [**findPhoneInboundRules**](docs/Api/PhoneInboundRulesApi.md#findphoneinboundrules) | **GET** /phoneinboundrules | Find multiple objects
*PhoneInboundRulesApi* | [**getPhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#getphoneinboundrule) | **GET** /phoneinboundrules/{id} | Get object by id
*PhoneInboundRulesApi* | [**patchPhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#patchphoneinboundrule) | **PATCH** /phoneinboundrules/{id} | Patch object&#39;s data
*PhoneInboundRulesApi* | [**removePhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#removephoneinboundrule) | **DELETE** /phoneinboundrules/{id} | Delete object by id
*PhoneOutboundRuleActionsApi* | [**createPhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#createphoneoutboundruleaction) | **POST** /phoneoutboundruleactions | Create a new object
*PhoneOutboundRuleActionsApi* | [**findPhoneOutboundRuleActions**](docs/Api/PhoneOutboundRuleActionsApi.md#findphoneoutboundruleactions) | **GET** /phoneoutboundruleactions | Find multiple objects
*PhoneOutboundRuleActionsApi* | [**getPhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#getphoneoutboundruleaction) | **GET** /phoneoutboundruleactions/{id} | Get object by id
*PhoneOutboundRuleActionsApi* | [**patchPhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#patchphoneoutboundruleaction) | **PATCH** /phoneoutboundruleactions/{id} | Patch object&#39;s data
*PhoneOutboundRuleActionsApi* | [**removePhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#removephoneoutboundruleaction) | **DELETE** /phoneoutboundruleactions/{id} | Delete object by id
*PhoneOutboundRulesApi* | [**createPhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#createphoneoutboundrule) | **POST** /phoneoutboundrules | Create a new object
*PhoneOutboundRulesApi* | [**findPhoneOutboundRules**](docs/Api/PhoneOutboundRulesApi.md#findphoneoutboundrules) | **GET** /phoneoutboundrules | Find multiple objects
*PhoneOutboundRulesApi* | [**getPhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#getphoneoutboundrule) | **GET** /phoneoutboundrules/{id} | Get object by id
*PhoneOutboundRulesApi* | [**patchPhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#patchphoneoutboundrule) | **PATCH** /phoneoutboundrules/{id} | Patch object&#39;s data
*PhoneOutboundRulesApi* | [**removePhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#removephoneoutboundrule) | **DELETE** /phoneoutboundrules/{id} | Delete object by id
*RateCentersApi* | [**findRateCenters**](docs/Api/RateCentersApi.md#findratecenters) | **GET** /ratecenters | Find multiple objects
*RateCentersApi* | [**getRateCenter**](docs/Api/RateCentersApi.md#getratecenter) | **GET** /ratecenters/{id} | Get object by id
*ServersApi* | [**createServer**](docs/Api/ServersApi.md#createserver) | **POST** /servers | Create a new object
*ServersApi* | [**findServers**](docs/Api/ServersApi.md#findservers) | **GET** /servers | Find multiple objects
*ServersApi* | [**getServer**](docs/Api/ServersApi.md#getserver) | **GET** /servers/{id} | Get object by id
*ServersApi* | [**patchServer**](docs/Api/ServersApi.md#patchserver) | **PATCH** /servers/{id} | Patch object&#39;s data
*ServersApi* | [**removeServer**](docs/Api/ServersApi.md#removeserver) | **DELETE** /servers/{id} | Delete object by id
*TimeSchedulesApi* | [**createTimeSchedule**](docs/Api/TimeSchedulesApi.md#createtimeschedule) | **POST** /timeschedules | Create a new object
*TimeSchedulesApi* | [**findTimeSchedules**](docs/Api/TimeSchedulesApi.md#findtimeschedules) | **GET** /timeschedules | Find multiple objects
*TimeSchedulesApi* | [**getTimeSchedule**](docs/Api/TimeSchedulesApi.md#gettimeschedule) | **GET** /timeschedules/{id} | Get object by id
*TimeSchedulesApi* | [**patchTimeSchedule**](docs/Api/TimeSchedulesApi.md#patchtimeschedule) | **PATCH** /timeschedules/{id} | Patch object&#39;s data
*TimeSchedulesApi* | [**removeTimeSchedule**](docs/Api/TimeSchedulesApi.md#removetimeschedule) | **DELETE** /timeschedules/{id} | Delete object by id
*UserTokensApi* | [**createUserToken**](docs/Api/UserTokensApi.md#createusertoken) | **POST** /usertokens | Create a new object
*UserTokensApi* | [**findUserTokens**](docs/Api/UserTokensApi.md#findusertokens) | **GET** /usertokens | Find multiple objects
*UserTokensApi* | [**getUserToken**](docs/Api/UserTokensApi.md#getusertoken) | **GET** /usertokens/{id} | Get object by id
*UserTokensApi* | [**patchUserToken**](docs/Api/UserTokensApi.md#patchusertoken) | **PATCH** /usertokens/{id} | Patch object&#39;s data
*UserTokensApi* | [**removeUserToken**](docs/Api/UserTokensApi.md#removeusertoken) | **DELETE** /usertokens/{id} | Delete object by id
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /users | Create a new object
*UsersApi* | [**findUsers**](docs/Api/UsersApi.md#findusers) | **GET** /users | Find multiple objects
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{id} | Get object by id
*UsersApi* | [**patchUser**](docs/Api/UsersApi.md#patchuser) | **PATCH** /users/{id} | Patch object&#39;s data
*UsersApi* | [**removeUser**](docs/Api/UsersApi.md#removeuser) | **DELETE** /users/{id} | Delete object by id
*VirtualExtensionsApi* | [**createVirtualExtension**](docs/Api/VirtualExtensionsApi.md#createvirtualextension) | **POST** /virtualextensions | Create a new object
*VirtualExtensionsApi* | [**findVirtualExtensions**](docs/Api/VirtualExtensionsApi.md#findvirtualextensions) | **GET** /virtualextensions | Find multiple objects
*VirtualExtensionsApi* | [**getVirtualExtension**](docs/Api/VirtualExtensionsApi.md#getvirtualextension) | **GET** /virtualextensions/{id} | Get object by id
*VirtualExtensionsApi* | [**patchVirtualExtension**](docs/Api/VirtualExtensionsApi.md#patchvirtualextension) | **PATCH** /virtualextensions/{id} | Patch object&#39;s data
*VirtualExtensionsApi* | [**removeVirtualExtension**](docs/Api/VirtualExtensionsApi.md#removevirtualextension) | **DELETE** /virtualextensions/{id} | Delete object by id
*VoicemailApi* | [**findVoicemail**](docs/Api/VoicemailApi.md#findvoicemail) | **GET** /voicemail | Find multiple objects
*VoicemailApi* | [**getVoicemail**](docs/Api/VoicemailApi.md#getvoicemail) | **GET** /voicemail/{id} | Get object by id

## Models

- [Acceptedsenders](docs/Model/Acceptedsenders.md)
- [Announcements](docs/Model/Announcements.md)
- [Authentication](docs/Model/Authentication.md)
- [Callqueueagents](docs/Model/Callqueueagents.md)
- [Callqueues](docs/Model/Callqueues.md)
- [Chatrooms](docs/Model/Chatrooms.md)
- [Clients](docs/Model/Clients.md)
- [Conferencerooms](docs/Model/Conferencerooms.md)
- [Contacts](docs/Model/Contacts.md)
- [Conversationmessages](docs/Model/Conversationmessages.md)
- [Conversations](docs/Model/Conversations.md)
- [Customers](docs/Model/Customers.md)
- [Developerapps](docs/Model/Developerapps.md)
- [Developerappsubscriptions](docs/Model/Developerappsubscriptions.md)
- [Directories](docs/Model/Directories.md)
- [Domains](docs/Model/Domains.md)
- [Faxaccounts](docs/Model/Faxaccounts.md)
- [Faxes](docs/Model/Faxes.md)
- [Find](docs/Model/Find.md)
- [FindAcceptedSenders200Response](docs/Model/FindAcceptedSenders200Response.md)
- [FindAnnouncements200Response](docs/Model/FindAnnouncements200Response.md)
- [FindCallQueueAgents200Response](docs/Model/FindCallQueueAgents200Response.md)
- [FindCallQueues200Response](docs/Model/FindCallQueues200Response.md)
- [FindChatRooms200Response](docs/Model/FindChatRooms200Response.md)
- [FindClients200Response](docs/Model/FindClients200Response.md)
- [FindConferenceRooms200Response](docs/Model/FindConferenceRooms200Response.md)
- [FindContacts200Response](docs/Model/FindContacts200Response.md)
- [FindConversationMessages200Response](docs/Model/FindConversationMessages200Response.md)
- [FindConversations200Response](docs/Model/FindConversations200Response.md)
- [FindCustomers200Response](docs/Model/FindCustomers200Response.md)
- [FindDeveloperAppSubscriptions200Response](docs/Model/FindDeveloperAppSubscriptions200Response.md)
- [FindDeveloperApps200Response](docs/Model/FindDeveloperApps200Response.md)
- [FindDirectories200Response](docs/Model/FindDirectories200Response.md)
- [FindDomains200Response](docs/Model/FindDomains200Response.md)
- [FindFaxAccounts200Response](docs/Model/FindFaxAccounts200Response.md)
- [FindFaxes200Response](docs/Model/FindFaxes200Response.md)
- [FindFirewall200Response](docs/Model/FindFirewall200Response.md)
- [FindGroupMembers200Response](docs/Model/FindGroupMembers200Response.md)
- [FindGroups200Response](docs/Model/FindGroups200Response.md)
- [FindHolidays200Response](docs/Model/FindHolidays200Response.md)
- [FindInvoiceItems200Response](docs/Model/FindInvoiceItems200Response.md)
- [FindInvoices200Response](docs/Model/FindInvoices200Response.md)
- [FindLicenses200Response](docs/Model/FindLicenses200Response.md)
- [FindMenuOptions200Response](docs/Model/FindMenuOptions200Response.md)
- [FindMenus200Response](docs/Model/FindMenus200Response.md)
- [FindMessageBrands200Response](docs/Model/FindMessageBrands200Response.md)
- [FindMessageCampaigns200Response](docs/Model/FindMessageCampaigns200Response.md)
- [FindNumberPorts200Response](docs/Model/FindNumberPorts200Response.md)
- [FindNumbers200Response](docs/Model/FindNumbers200Response.md)
- [FindOffices200Response](docs/Model/FindOffices200Response.md)
- [FindPhoneInboundRuleActions200Response](docs/Model/FindPhoneInboundRuleActions200Response.md)
- [FindPhoneInboundRules200Response](docs/Model/FindPhoneInboundRules200Response.md)
- [FindPhoneOutboundRuleActions200Response](docs/Model/FindPhoneOutboundRuleActions200Response.md)
- [FindPhoneOutboundRules200Response](docs/Model/FindPhoneOutboundRules200Response.md)
- [FindRateCenters200Response](docs/Model/FindRateCenters200Response.md)
- [FindServers200Response](docs/Model/FindServers200Response.md)
- [FindTimeSchedules200Response](docs/Model/FindTimeSchedules200Response.md)
- [FindUserTokens200Response](docs/Model/FindUserTokens200Response.md)
- [FindUsers200Response](docs/Model/FindUsers200Response.md)
- [FindVirtualExtensions200Response](docs/Model/FindVirtualExtensions200Response.md)
- [Firewall](docs/Model/Firewall.md)
- [Groupmembers](docs/Model/Groupmembers.md)
- [Groups](docs/Model/Groups.md)
- [Holidays](docs/Model/Holidays.md)
- [Invoiceitems](docs/Model/Invoiceitems.md)
- [Invoices](docs/Model/Invoices.md)
- [Licenses](docs/Model/Licenses.md)
- [Menuoptions](docs/Model/Menuoptions.md)
- [Menus](docs/Model/Menus.md)
- [Messagebrands](docs/Model/Messagebrands.md)
- [Messagecampaigns](docs/Model/Messagecampaigns.md)
- [Numberports](docs/Model/Numberports.md)
- [Numbers](docs/Model/Numbers.md)
- [Offices](docs/Model/Offices.md)
- [Phoneinboundruleactions](docs/Model/Phoneinboundruleactions.md)
- [Phoneinboundrules](docs/Model/Phoneinboundrules.md)
- [Phoneoutboundruleactions](docs/Model/Phoneoutboundruleactions.md)
- [Phoneoutboundrules](docs/Model/Phoneoutboundrules.md)
- [Ratecenters](docs/Model/Ratecenters.md)
- [ResponseDate](docs/Model/ResponseDate.md)
- [ResponseError](docs/Model/ResponseError.md)
- [ResponseUsers](docs/Model/ResponseUsers.md)
- [Servers](docs/Model/Servers.md)
- [Timeschedules](docs/Model/Timeschedules.md)
- [Users](docs/Model/Users.md)
- [Usertokens](docs/Model/Usertokens.md)
- [Virtualextensions](docs/Model/Virtualextensions.md)

## Authorization

Authentication schemes defined for the API:
### jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```


