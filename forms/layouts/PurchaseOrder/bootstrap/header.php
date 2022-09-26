<div class="header-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; width: 50%;">
                                <div>
                                    <table style="width: 65%; font-size: 1.1em;">
                                        <tr>
                                            <th style="background-color: <?= $formModel->colors['color2'] ?>; color: white; text-align: left;">
                                                <div>
                                                    <span>
                                                        VENDOR | SUPPLIER:
                                                    </span>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span>
                                                        <?= $formModel->header->customerName ?> <br>
                                                        <?= $formModel->header->contactPerson ?> <br>
                                                        <?= $formModel->header->streetAddress ?> <br>
                                                        <?= $formModel->header->city ?>, <?= $formModel->header->country ?>, <?= $formModel->header->zip ?> <br>
                                                        <?= $formModel->header->customerTin ?> <br>
                                                        <?= $formModel->header->customerContactNo ?> <br>
                                                        <?= $formModel->header->faxNo ?>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                            <td style="vertical-align: top; text-align: right; width: 50%;">
                                <div>
                                    <table style="width: 65%; font-size: 1.1em;">
                                        <tr>
                                            <th style="background-color: <?= $formModel->colors['color2'] ?>; color: white; text-align: left;">
                                                <div>
                                                    <span>
                                                        SHIP TO:
                                                    </span>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">
                                                <div>
                                                    <span>
                                                        <?= $formModel->header->shipToName ?> <br>
                                                        <?= $formModel->header->shipToCompany ?> <br>
                                                        <?= $formModel->header->shipToStreetAddress ?> <br>
                                                        <?= $formModel->header->shipToCity ?>, <?= $formModel->header->shipToProvince ?>, <?= $formModel->header->shipToCountry ?>, <?= $formModel->header->shipToZip ?> <br>
                                                        <?= $formModel->header->shipToContactNo ?> <br>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 20px;">
                <table style="width: 100%; font-size: 1.1em; text-align: center;">
                    <thead>
                        <tr>
                            <th style="border: 0.5px solid black; border-right: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>; color: white;">
                                <span>
                                    Requisitioner
                                </span>
                            </th>
                            <th style="border: 0.5px solid black; border-left: 0.5px solid white; border-right: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>;  color: white;">
                                <span>
                                    PR No.
                                </span>
                            </th>
                            <th style="border: 0.5px solid black; border-left: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>;  color: white;">
                                <span>
                                    F.O.B
                                </span>
                            </th>
                            <th style="border: 0.5px solid black; border-left: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>;  color: white;">
                                <span>
                                    Payment Term
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 0.5px solid black;">
                                <span>
                                    <?= $formModel->header->requisitioner ?>
                                </span>
                            </td>
                            <td style="border: 0.5px solid black;">
                                <span>
                                    <?= $formModel->header->prNo ?>
                                </span>
                            </td>
                            <td style="border: 0.5px solid black;">
                                <span>
                                    <?= $formModel->header->fob ?>
                                </span>
                            </td>
                            <td style="border: 0.5px solid black;">
                                <span>
                                    <?= $formModel->header->paymentTerms ?>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>