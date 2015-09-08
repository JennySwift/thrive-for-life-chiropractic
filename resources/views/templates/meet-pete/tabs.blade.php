<ul id="tabs">
    <li
        ng-click="changeTab(1, $event)"
        ng-mouseover="hoverTab($event)"
        ng-mouseleave="leaveTab($event)">
        What do you love about being a chiropractor?
    </li>
    <li ng-click="changeTab(2, $event)" ng-mouseover="hoverTab($event)" ng-mouseleave="leaveTab($event)">What are your qualifications?</li>
    <li ng-click="changeTab(3, $event)" ng-mouseover="hoverTab($event)" ng-mouseleave="leaveTab($event)">What principles, values and beliefs shape your approach to health care?</li>
    <li ng-click="changeTab(4, $event)" ng-mouseover="hoverTab($event)" ng-mouseleave="leaveTab($event)">What do you like to do when you're not treating patients?</li>
</ul>