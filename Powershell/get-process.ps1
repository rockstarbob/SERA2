﻿get-service -ComputerName Airapppre71.seattle.internal.local | where {$_.DisplayName -like '*NWS*'} |select name, status | convertto-html