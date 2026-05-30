$extensions = @("*.php", "*.tpl", "*.html", "*.js")
$excludeFolders = @(".git", "vendor", "node_modules", "tests", "Api")

$files = Get-ChildItem -Path . -Recurse -Include $extensions | Where-Object {
    $path = $_.FullName
    $skip = $false
    foreach ($folder in $excludeFolders) {
        if ($path -match "\\$folder\\") {
            $skip = $true
            break
        }
    }
    return -not $skip
}

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    $original = $content
    
    # Do not replace namespace SuiteCRM or SuiteCRM\
    # We use negative lookbehind to avoid `namespace SuiteCRM` and `use SuiteCRM`
    # and negative lookahead to avoid `SuiteCRM\`
    
    # Safe replacements for user-facing text:
    
    # 1. 'SuiteCRM' or "SuiteCRM" -> Badirra CRM
    $content = [regex]::Replace($content, "(?i)(['"">\s])SuiteCRM(['""<\s.,?!])", "`$1Badirra CRM`$2")
    $content = [regex]::Replace($content, "(?i)(['"">\s])Suite CRM(['""<\s.,?!])", "`$1Badirra CRM`$2")
    $content = [regex]::Replace($content, "(?i)SUITECRM DASHBOARD", "BADIRRA CRM DASHBOARD")
    
    # Specific replacements from language files we saw
    $content = $content -replace "'SuiteCRM'", "'Badirra CRM'"
    $content = $content -replace '"SuiteCRM"', '"Badirra CRM"'
    $content = $content -replace ">SuiteCRM<", ">Badirra CRM<"
    $content = $content -replace "SuiteCRM Folder", "Badirra CRM Folder"
    $content = $content -replace "SuiteCRM Dashlet", "Badirra CRM Dashlet"
    $content = $content -replace "SuiteCRM Feed", "Badirra CRM Feed"
    $content = $content -replace "SuiteCRM Favorites", "Badirra CRM Favorites"
    $content = $content -replace "Supercharged by SuiteCRM", "Powered by Badirra CRM"
    $content = $content -replace "SuiteCRM - Open Source CRM", "Badirra CRM"
    
    if ($content -cne $original) {
        Set-Content -Path $file.FullName -Value $content -NoNewline
        Write-Host "Updated: $($file.FullName)"
    }
}
Write-Host "Branding replacement complete."
